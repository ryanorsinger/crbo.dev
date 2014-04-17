@extends('layouts.master')

@section('title')
<title>User Index</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'class' => 'form-inline')) }}
		<div class="form-group">
			{{ Form::label('username', 'Username:') }}
			{{ Form::text('username') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('admin', 'Admin') }}
			{{ Form::radio('role', 'admin') }} &nbsp;
			{{ Form::label('buyback', 'Buyback') }}
			{{ Form::radio('role', 'buyback') }} &nbsp;
			{{ Form::label('refurb', 'Refurb')}}
			{{ Form::radio('role', 'refurb') }}
		</div>&nbsp;
		<button class="btn btn-success" type="submit">Edit User</button>
		{{ Form::close() }}
	</div>
	<br>
	<br>
	<table class="table table-bordered table-striped">
		<thead>
			<th>ID</th>
			<th>Username</th>
			<th>Role</th>
			<th>Created</th>
			<th>Last Updated</th>
		</thead>
		<tbody>
			<tr>
				<td>{{{ $user->id }}}</td>
				<td>{{{ $user->username }}}</td>
				<td>{{{ $user->role }}}</td>
				<td>{{{ $user->created_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
				<td>{{{ $user->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
			</tr>
		</tbody>
	</table>
	<br>
	<br>
</div>


@stop