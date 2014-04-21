@extends('layouts.master')

@section('title')
<title>210Geeks Login</title>
@stop

@section('top-script')
<script>


</script>
@stop

@section('style')

<style>
#box {
	width: 450px;
}

h1 {
	font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
	}


</style>
@stop

@section('content')
<div class="container-fluid" id="box">
<h1 id="crbo_title"><center>C&nbsp;R&nbsp;B&nbsp;O&nbsp;</h1></center>
<h1 id="header-title"><center>Computer Refurbisher's Back Office</center></h1>

<br>
<br>
	
	<div>
		{{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'POST')) }}
		
		<div class="form-group">
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'demo username is demo')) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'demo password is demo')) }}
		</div>
		<button class="btn btn-success" type="submit">Submit</button>
		{{ Form::close() }}
	</div>
</div>


@stop

@section('bottom-script')
<script>
    $('document').ready(function() {


</script>

@stop
