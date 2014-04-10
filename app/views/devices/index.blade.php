@extends('layouts.master')

@section('title')
<title>Devices</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<a href="{{{ action('DevicesController@create') }}}"><img src="/img/buyback.png"></a>
		</div>
		<div class="col-md-3">
			<a href="{{{ action('DevicesController@index') }}}"><img src="/img/refurbish.png"></a>
		</div>
	</div>
			@if (Auth::user()->role == "admin")
			<a href="">Admin Panel</a>
			@endif
	<br>
	<br>
	<a href="{{{ action('HomeController@logout') }}}">Logout</a>
</div>


@stop