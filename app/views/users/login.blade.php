@extends('layouts.master')

@section('form')

	<div class='row'>
		<div class='large-8 medium-8 large-centered medium-centered columns'>
			<fieldset>
				<legend><h3>User Login</h3></legend>
				<form id="form" method='POST' action="{{{ action('HomeController@attemptLogin') }}}">
				
					{{ $errors->first('username_or_email', '<span class="help-block error">:message</span>') }}
					<input type='text' name='username_or_email' value="" placeholder="Username or Email">
					{{ $errors->first('password', '<span class="help-block error">:message</span>') }}
					<input type='password' name='password' value="" placeholder='Password'>

					<input type='submit' class='button round' value='Login'>

					{{-- Add CSRF protection, which is enabled in BaseController --}}
					{{ Form::token() }}

				</form>
			</fieldset>
		</div>
	</div>

@stop