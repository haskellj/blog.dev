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

	public function showHome()
	{
		$data = array(
				'aboutActive' => "active",		// These keys will become variables in the View, much like the PHP extract() function
				'resumeActive' => '',
				'portfolioActive' => '',
			);
		return View::make('about')->with($data);
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}


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
