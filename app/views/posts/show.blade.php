@extends('layouts.master')

@section('one-post')
	<h1>Post with id: {{{$post->id}}}</h1>
	<div class='row'>
		<div class='large-10 medium-10 medium-centered large-centered columns'>
			<div class='panel'>
				<h3>{{{$post->title}}}</h3>
				<h5>{{{$post->body}}}</h5>
				<p class='date'>Created on: {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
				<p class='date'>Last updated on: {{{$post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
			</div>
			<div class='row'>
				<div class='large-3 medium-4 columns'>
					<a href="{{{ action('PostsController@edit', $post->id) }}}"><button class='button'>Edit Post</button></a>
				</div>
				<div class='large-9 medium-8 columns'>
					{{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id])) }}
						<button type='submit' class='button'>Delete Post</button>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@stop