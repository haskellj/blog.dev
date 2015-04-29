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

Route::get('/', 'HomeController@showHome');

Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');




//  Below are the practice example routes we created when first learning about Laravel
Route::get('sayhello/{name}', 'HomeController@sayHello');

Route::get('my_first_view', 'HomeController@myFirstView');

Route::get('passing_data_to_view/{name}', 'HomeController@passingDataToView');

Route::get('rolldice/{guess}', 'HomeController@guess');





