@extends('layouts.master')

@section('title')
<title>Admin Panel</title>

@stop

@section('style')


@stop

@section('content')
<br>
<br>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-md-offset-1">
			<a href="{{{ action('UsersController@index') }}}">Users</a>
			<span class="glyphicon glyphicon-user"></span>
		</div>
		<div class="col-md-2">
			<a href="{{{ action('ManufacturersController@index') }}}">Manufacturers</a>
			<img src="/img/manufacturer.png">
		</div>
		<div class="col-md-2">
			<a href="{{{ action('CpusController@index') }}}">Processors
				<img src="/img/cpu.png">
			</a>
		</div>
		<div class="col-md-2">
			<a href="{{{ action('RamsController@index') }}}">Memory
				<img src="/img/ram.png">
			</a>
		</div>
		<div class="col-md-2">
			<a href="{{{ action('HddsController@index') }}}">Hard Drives
				<img src="/img/hdd.png">
			</a>
		</div>
		
		
		
	</div>
</div>


@stop