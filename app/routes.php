<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('sayhello/{name}', function($name)		// the first parameter is the url extension
{
	if($name == "Chris") {
		return Redirect::to('/');
	} else {
		return "Hello, $name!";
	}
});

Route::get('resume', function()
{
	return "This is my resume.";
});

Route::get('portfolio', function()
{
	return "This is my portfolio.";
});

Route::get('my_first_view', function()
{
	return View::make('my-first-view');	//this is the name of the file in app/views folder w/o .php suffix
});

Route::get('passing_data_to_view/{name}', function($name)
{
	$data = array(
					'name' => $name,
					'another' => 'something else'
			);
	return View::make('my-first-view')->with($data);	//this is the name of the file in app/views folder w/o .php suffix
});

Route::get('rolldice/{guess}', function($guess)
{
	// if (isset($_GET['guess'])){
		$data = array(
				'random' => rand(1,6),
				'guess' => $guess
				);
		return View::make('roll-dice')->with($data);
	// }
});





