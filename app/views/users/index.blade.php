@extends('layouts.master')

@section('title')
<title>User Index</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<a href=" {{{ action('UsersController@create') }}} ">Add New User</a>
	<br>
	<table class="table table-bordered table-striped">
		<thead>
			<th>ID</th>
			<th>Username</th>
			<th>Role</th>
			<th>Created</th>
			<th>Last Updated</th>
			<th></th>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td><a href=" {{{ action('UsersController@edit', $user->id) }}}"> {{{ $user->id }}} </a></td>
				<td><a href=" {{{ action('UsersController@edit', $user->id) }}}"> {{{ $user->username }}}</a></td>
				<td>{{{ $user->role }}}</td>
				<td>{{{ $user->created_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
				<td>{{{ $user->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
				<td><center>{{ Form::open(array('action' => array('UsersController@destroy', $user->id), 'method' => 'DELETE')) }}
					<button class="btn btn-danger" type="submit">Delete User</button>
				{{ Form::close() }}</center></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<br>
	<br>
</div>


@stop