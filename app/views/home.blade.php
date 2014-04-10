@extends('layouts.master')

@section('title')
<title>Panel</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		<a href="{{{ action('DevicesController@create') }}}">Buyback Form</a>
		<a href="{{{ action('DevicesController@index') }}}">Device Index</a>
		@if (Auth::user()->role == "admin")
		<a href="">Admin Panel</a>
		@endif
	</div>
	<br>
	<br>
	<a href="{{{ action('HomeController@logout') }}}">Logout</a>
</div>


@stop