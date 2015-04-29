@extends('layouts.master')

@section('create-post')
	<form method='POST' action="{{{ action('PostsController@store') }}}">
		<input type='text' name='title' value="{{{ Input::old('title') }}}" placeholder='Title'>
		<textarea type='text' name='body' placeholder='Body'>{{{ Input::old('body') }}}</textarea>
		<input type='submit' name='create' value='Post'>
	</form>
@stop