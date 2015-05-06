@extends('layouts.master')

@section('form')
{{-- {{ Route::currentRouteAction() }} --}}
	<div class='row'>
		<div class='large-8 medium-8 large-centered medium-centered columns'>
			<fieldset>
					@if($method=="edit")
						<legend><h3>Edit Post</h3></legend>
						<form id="form" method='POST' action="{{{ action('PostsController@update', $id) }}}">
							<input type="hidden" name="_method" value="PUT">
					@else
						<legend><h3>Create a New Post</h3></legend>
						<form id="form" method='POST' action="{{{ action('PostsController@store') }}}">
							<input type="hidden" name="_method" value="POST">
					@endif
							{{ $errors->first('title', '<span class="help-block error">:message</span>') }}
							<input type='text' name='title' value="{{{$processedInput['title']}}}" placeholder="Title">
							{{ $errors->first('body', '<span class="help-block error">:message</span>') }}
							<textarea type='text' name='body' rows='10' cols='20' placeholder='Body'>{{{$processedInput['body']}}}</textarea>

							@if($method=="edit")
								<input type='submit' class='button round' name='edit' value='Save Changes'>
							@else
								<input type='submit' class='button round' name='create' value='Post'>
							@endif

					{{-- Add CSRF protection, which is enabled in BaseController --}}
					{{ Form::token() }}

					</form>
			</fieldset>
		</div>
	</div>
@stop
