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

//=========== Login/out procedure routes ==============
Route::get('login', 'HomeController@login');

Route::post('login', 'HomeController@attemptLogin');

Route::get('logout', 'HomeController@logout');
//=====================================================
Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('updateall', 'HomeController@updateAll');

Route::resource('posts', 'PostsController');

Route::get('test404', function()
{
	App::abort(404);
});

Route::get('orm-test', function()		//for testing the different tries below
{
	// try {
	// 	var_dump(empty(Input::old()));
	// } catch (Exception $e) {
	// 	return $e->getMessage();
	// }
	// try {
	// 	$post = Post::findOrFail(1);
	// 	$post->delete();
	// 	// $post->title = "The is the updated title";
	// 	// $post->save();
	// 	return $post->title;
	// } catch (Exception $e) {
	// 	return $e->getMessage();
	// }

	// try{
	// 	$posts = Post::all();
	// 	return $posts;
	// } catch (Exception $e){
	// 	return $e->getMessage();
	// }

	// $post = new Post();
	// $post->title = "New Blog";
	// $post->body = "Lorem ipsum dolor";
	// $post->save();

	// $post2 = new Post();
	// $post2->title = "Another Blog";
	// $post2->body = "2Lorem 2ipsum 2dolor";
	// $post2->save();
});




//  Below are the practice example routes we created when first learning about Laravel
Route::get('sayhello/{name}', 'HomeController@sayHello');

Route::get('my_first_view', 'HomeController@myFirstView');

Route::get('passing_data_to_view/{name}', 'HomeController@passingDataToView');

Route::get('rolldice/{guess}', 'HomeController@guess');





