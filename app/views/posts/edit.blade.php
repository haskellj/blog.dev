@extends('layouts.master')

@section('post-form')
{{-- {{ Route::currentRouteAction() }} --}}
	<fieldset>
		<legend><h3>Edit Post</h3></legend>
			@if($method=="edit")
				<form id="form" method='POST' action="{{{ action('PostsController@update', $postId) }}}">
					<input type="hidden" name="_method" value="PUT">
			@else
				<form id="form" method='POST' action="{{{ action('PostsController@store') }}}">
					<input type="hidden" name="_method" value="POST">
			@endif
					{{ $errors->first('title', '<span class="help-block error">:message</span>') }}
					<input type='text' name='title' value="{{{$processedInput['title']}}}" placeholder="Title">
					{{ $errors->first('body', '<span class="help-block error">:message</span>') }}
					<textarea type='text' name='body' placeholder='Body'>{{{$processedInput['body']}}}</textarea>

					@if($method="edit")
						<input type='submit' class='button round' name='edit' value='Save Changes'>
					@else
						<input type='submit' class='button round' name='create' value='Post'>
					@endif

			{{-- Add CSRF protection, which is enabled in BaseController --}}
			{{ Form::token() }}

			</form>
	</fieldset>
@stop
