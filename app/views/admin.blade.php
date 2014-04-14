@extends('layouts.master')

@section('title')
<title>Admin Panel</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<a href="{{{ action('UsersController@index') }}}">Users</a>
		</div>
		<div class="col-md-3">
			<a href="{{{ action('DevicesController@index') }}}">Prices</a>
		</div>
	</div>
	<br>
	<br>
	<a href="{{{ action('HomeController@logout') }}}">Logout</a>
</div>


@stop