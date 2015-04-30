@extends('layouts.master')

@section('all-posts')
	<h1>All Posts: </h1>
	@foreach($posts as $post)
		<div class='row'>
			<div class='large-6 columns'>
				<div class='panel'>
					<ul>
						<li>{{{ $post->title }}}</li>
						<li>{{{ $post->body }}}</li>
						<li>{{{ $post->created_at }}}</li>
					</ul>
				</div>
			</div>
		</div>
	@endforeach
@stop