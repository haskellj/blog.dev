<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function __construct()
	{
		// first parameter is name of filter, the second is an array containing either 'only' or 'except' associated with its own array of HomeController methods that direct to certain pages
		$this->beforeFilter('auth', array('only' => array('updateAll')));
	}

	public function showHome()
	{
		// this array will be used to add/remove classes to navlinks
		$class = array(
				'aboutActive' => "active",		// These keys will become variables in the View, much like the PHP extract() function
				'resumeActive' => '',
				'portfolioActive' => '',
			);
		return View::make('home')->with($class);
	}

	public function showResume()
	{
		// this array will be used to add/remove classes to navlinks
		$class = array(
				'aboutActive' => '',		// These keys will become variables in the View, much like the PHP extract() function
				'resumeActive' => 'active',
				'portfolioActive' => '',
			);
		return View::make('resume')->with($class);
	}

	public function showPortfolio()
	{
		// this array will be used to add/remove classes to navlinks
		$class = array(
				'aboutActive' => '',		// These keys will become variables in the View, much like the PHP extract() function
				'resumeActive' => '',
				'portfolioActive' => 'active',
			);
		return View::make('portfolio')->with($class);
	}

//===================== Authentication Controllers ====================
	// get route
	public function login()
	{
		// dd(Auth::check());
		//if logged in already, send them to the posts page
		if(Auth::check()) {
			Session::flash('errorFlash', 'Already logged in.');
			return Redirect::to('/');
		}
		return View::make('users.login');
	}

	// post route
	public function attemptLogin()
	{	

		// create the validator
	    $validator = Validator::make(Input::all(), User::$rules);

		$usernameOrEmail = Input::get('username_or_email');
		$password = Input::get('password');

		if ($validator->fails()) {
			// temporary error message that will load on redirected page.
	    	Session::flash('errorFlash', 'Field(s) submitted with no input.');
	        // validation failed, redirect to the post edit page with validation errors and old inputs
	    	return Redirect::to("login#form")->withInput()->withErrors($validator);

		// If username/password or email/password are correct, direct wherever user intended to go, otherwise default to homepage
		} elseif ((Auth::attempt(array('username' => $usernameOrEmail, 'password' => $password)))
			|| Auth::attempt(array('email' => $usernameOrEmail, 'password' => $password))) {
		    
		    // dd(Auth::check());
	    	Session::flash('successFlash', 'Login successful!');
	    	return Redirect::intended('/');

		} else {
		    // login failed, go back to the login screen, display error message
		    Session::flash('errorFlash', 'Login failed, username/email or password were incorect.');
	    	return Redirect::to("login#form")->withInput();
		}
	}

	// get route
	public function logout()
	{
		Auth::logout();
		Session::flash('successFlash', 'Logout successful!');
		return Redirect::to('/');
	}
//===================== End Authentication Controllers ====================

	public function updateAll()
	{
		$posts = Post::all();
		
		foreach($posts as $post){
			$post->slug = $post->title;	// will connect individual words in the title with hyphens for use as a url appendage
			$post->save();
		}
	}



//  Below are the practice example routes we created when first learning about Laravel
	public function sayHello($name)
	{
		if(!isset($name)) {
			return Redirect::to('/');
		} else {
			return "Hello, $name!";
		}
	}

	public function myFirstView()
	{
		return View::make('my-first-view');	//this is the name of the file in app/views folder w/o .php suffix
	}

	public function passingDataToView($name)
	{
		$data = array(
				'name' => $name,			 // These keys will become variables in the View, much like the PHP extract() function
				'another' => 'something else'
			);
		return View::make('my-first-view')->with($data);	//this is the name of the file in app/views folder w/o .php suffix
		// return View::make('my-first-view')->with('name', $name);	//this is how you could pass a single variable
	}

	public function guess($guess)
	{
		$data = array(
				'random' => rand(1,6),
				'guess' => $guess
				);
		return View::make('roll-dice')->with($data);
	}
}
