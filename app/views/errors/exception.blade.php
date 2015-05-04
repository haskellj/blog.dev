@extends('layouts.master')

@section('error')
	<div class='row'>
		<div class='large-8 large-centered text-center columns'>
			<h2>{{{ "Error 404:" }}}</h2>
			<hr>
			<h4>{{{ "The page you were looking for does not exist." }}}</h4>
		</div>
	</div>
@stop