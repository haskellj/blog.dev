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
	$data = array(
				'aboutActive' => "active",		// These keys will become variables in the View, much like the PHP extract() function
				'resumeActive' => '',
				'portfolioActive' => '',
			);
	return View::make('layouts.master')->with($data);
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
	return View::make('resume');
});

Route::get('portfolio', function()
{
	return View::make('portfolio');
});

Route::get('my_first_view', function()
{
	return View::make('my-first-view');	//this is the name of the file in app/views folder w/o .php suffix
});

Route::get('passing_data_to_view/{name}', function($name)
{
	$data = array(
				'name' => $name,			 // These keys will become variables in the View, much like the PHP extract() function
				'another' => 'something else'
			);
	return View::make('my-first-view')->with($data);	//this is the name of the file in app/views folder w/o .php suffix
	// return View::make('my-first-view')->with('name', $name);	//this is how you could pass a single variable
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





