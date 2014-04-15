@extends('layouts.master')

@section('title')
<title>Admin Panel</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<a href="{{{ action('UsersController@index') }}}">Users</a>
		</div>
		<div class="col-md-2">
			<a href="{{{ action('HddsController@index') }}}">Hard Drives</a>
		</div>
		<div class="col-md-2">
			<a href="{{{ action('ManufacturersController@index') }}}">Manufacturers</a>
		</div>
		<div class="col-md-2">
			<a href="{{{ action('RamsController@index') }}}">Memory</a>
		</div>
		<div class="col-md-2">
			<a href="{{{ action('CpusController@index') }}}">Processors</a>
		</div>
	</div>
</div>


@stop