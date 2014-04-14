@extends('layouts.master')

@section('title')
<title>Add User</title>
@stop

@section('style')

<style>
#box {
	width: 600px;
}
</style>
@stop

@section('content')
<div class="container-fluid" id="box">
<h1><center>Create User:</center></h1>
<br>
<br>
	<div>
		{{ Form::open(array('action' => 'UsersController@store', 'method' => 'POST')) }}
		
		<div class="form-group">
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::text('password', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('role', 'Role') }}
			{{ Form::radio('admin', 'Admin') }}
			{{ Form::radio('buyback', 'Buyback') }}
			{{ Form::radio('refurb', 'Refurb') }}
		</div>
		<button class="btn btn-success" type="submit">Submit</button>
		{{ Form::close() }}
	</div>
</div>


@stop