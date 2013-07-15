@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Feed Back</h1>
</div>
<form method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="csrf_token" id="csrf_token" value="{{ Session::getToken() }}" />

	<!-- Name -->
	<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
		<label class="control-label" for="email">name</label>
		<div class="controls">
			<input type="text" name="name" id="name" value="{{ Input::old('name') }}" />
			{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ Name -->

	<!-- email -->
	<div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
		<label class="control-label" for="password">Email</label>
		<div class="controls">
			<input type="email" name="email" id="email" value="" />
			{{ $errors->first('email', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ email -->
    
    	<!-- email -->
	<div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
		<label class="control-label" for="password">Message</label>
		<div class="controls">
			<input type="text" name="message" id="message" value="" />
			{{ $errors->first('message', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ email -->

	<!-- Login button -->
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Submit</button>
		</div>
	</div>
	<!-- ./ login button -->
</form>
@stop
