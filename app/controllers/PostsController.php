<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		$data = ['posts' => $posts];
		return View::make('posts.index')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 * (Inserts a new record in the database)
	 * @return Response
	 */
	public function store()
	{
		 // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {

	        // validation failed, redirect to the post create page with validation errors and old inputs
	    	return Redirect::to('posts/create#form')->withInput()->withErrors($validator);

	    } else {

	        // validation succeeded, create and save the post
			$post = new Post;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			return Redirect::action('PostsController@index');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try{

			$post = Post::findOrfail($id);
			return View::make('posts.show')->with(['post' => $post]);

		} catch (Exception $e) {

			Log::error($e);
			$data = [
					'error' => $e->getMessage(),
					'id' 	=> $id
			];

			return View::make('errors.exception')->with($data);
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Show editing form for post with id: $id";
		// return Redirect::back()->withInput();
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Update post with id: $id";
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Will not be viewable in browser.\nWill delete post with id: $id";
	}


}
