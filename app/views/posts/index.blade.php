@extends('layouts.master')

@section('all-posts')
	<h1>All Posts: </h1>
	@foreach($posts as $post)
		<div class='row'>
			<div class='large-6 columns'>
				<div class='panel'>
					<h3>{{{ $post->title }}}</h3>
					<h5>{{{ $post->body }}}</h5>
					<p>{{{ $post->created_at }}}</p>
				</div>
			</div>
		</div>
	@endforeach
@stop