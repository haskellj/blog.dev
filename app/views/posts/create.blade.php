@extends('layouts.master')

@section('create-post')
	<form id="form" method='POST' action="{{{ action('PostsController@store') }}}">
		{{ $errors->first('title', '<span class="help-block error">:message</span>') }}
		<input type='text' name='title' value="{{{ Input::old('title') }}}" placeholder='Title'>
		{{ $errors->first('body', '<span class="help-block error">:message</span>') }}
		<textarea type='text' name='body' placeholder='Body'>{{{ Input::old('body') }}}</textarea>
		<input type='submit' name='create' value='Post'>
	</form>
@stop