@extends('layouts.master')

@section('one-post')
	<h1>Post with id: {{{$post->id}}}</h1>
	<div class='row'>
		<div class='large-10 columns'>
			<div class='panel'>
				<ul>
					<li>{{{$post->title}}}</li>
					<li>{{{$post->body}}}</li>
					<li>{{{$post->created_at}}}</li>
				</ul>
			</div>
		</div>
	</div>
@stop