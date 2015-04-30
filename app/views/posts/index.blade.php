@extends('layouts.master')

@section('all-posts')
	<h1>All Posts: </h1>

	{{-- Pagination Links --}}
	<div class="pagination-centered">
		{{ $posts->links() }}
	</div>

	@foreach($posts as $post)
		<div class='row'>
			<div class='large-6 columns'>
				<div class='panel'>
					<h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
					<h5>{{{ $post->body }}}</h5>
					<p>{{{ $post->created_at }}}</p>
				</div>
			</div>
		</div>
	@endforeach

	{{-- Pagination Links --}}
	<div class="pagination-centered">
		{{ $posts->links() }}
	</div>
@stop