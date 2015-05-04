@extends('layouts.master')

@section('all-posts')
	<h1>All Posts: </h1>

	{{-- Pagination Links --}}
	<div class="pagination-centered">
		{{ $posts->links() }}
	</div>

	@foreach($posts as $post)
		<div class='row'>
			<div class='large-10 medium-10 medium-centered large-centered columns'>
				<div class='panel'>
					<p class='date'>Created on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>
					<p class='date'>Last updated: {{{ $post->updated_at }}}</p>
					<h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
					<h5>{{{ $post->body }}}</h5>
				</div>
			</div>
		</div>
	@endforeach

	{{-- Pagination Links --}}
	<div class="pagination-centered">
		{{ $posts->links() }}
	</div>
@stop