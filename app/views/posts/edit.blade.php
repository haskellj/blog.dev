@extends('layouts.master')

@section('post-form')
	<fieldset>
		<legend><h3>Edit Post</h3></legend>
			<form id="form" method='POST' action="{{{ action('PostsController@update', $post->id) }}}">
				<input type="hidden" name="_method" value="PUT">

				{{ $errors->first('title', '<span class="help-block error">:message</span>') }}
				<input type='text' name='title' value="{{{ (Input::old('title')) }}}{{{ $post['title'] }}}" placeholder="Title">
				{{ $errors->first('body', '<span class="help-block error">:message</span>') }}
				<textarea type='text' name='body' placeholder='Body'>{{{ Input::old('body') }}}{{{ $post['body']}}}</textarea>
				<input type='submit' class='button round' name='edit' value='Submit Changes'>

			{{-- Add CSRF protection, which is enabled in BaseController --}}
			{{ Form::token() }}

			</form>
	</fieldset>
@stop