@extends('layouts.master')

@section('post-form')
	{{-- {{ Route::currentRouteAction() }} --}}
	<fieldset>
		<legend><h3>Create a New Post</h3></legend>
			<form id="form" method='POST' action="{{{ action('PostsController@store') }}}">
				{{ $errors->first('title', '<span class="help-block error">:message</span>') }}
				<input type='text' name='title' value="{{{$processedInput['title']}}}" placeholder='Title'>
				{{ $errors->first('body', '<span class="help-block error">:message</span>') }}
				<textarea type='text' name='body' placeholder='Body'>{{{$processedInput['body']}}}</textarea>
				<input type='submit' class='button round' name='create' value='Post'>

			{{-- Add CSRF protection, which is enabled in BaseController --}}
			{{ Form::token() }}

			</form>
	</fieldset>
@stop