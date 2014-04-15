@extends('layouts.master')

@section('title')
<title>Hard Drives</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		{{ Form::model($hdd, array('action' => array('HddsController@update', $hdd->id), 'method' => 'PUT', 'class' => 'form-inline')) }}
		<div class="form-group">
			{{ Form::label('form_factor', 'Form Factor:') }}
			{{ Form::text('form_factor') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('interface', 'Interface:') }}
			{{ Form::text('interface') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('capacity', 'Capacity:') }}
			{{ Form::text('capacity') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('price', 'Price:') }}
			{{ Form::text('price') }}
		</div>&nbsp;
		<button class="btn btn-success" type="submit">Edit Item</button>
		{{ Form::close() }}
	</div>
	<br>
	<br>
	<table class="table table-bordered table-striped">
		<thead>
			<th>ID</th>
			<th>Form Factor</th>
			<th>Interface</th>
			<th>Capacity</th>
			<th>Price</th>
			<th>Last Updated</th>
		</thead>
		<tbody>
			<tr>
				<td>{{{ $hdd->id }}}</td>
				<td>{{{ $hdd->form_factor }}}</td>				
				<td>{{{ $hdd->interface }}}</td>
				<td>{{{ $hdd->capacity }}}</td>
				<td>{{{ $hdd->price }}}</td>
				<td>{{{ $hdd->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
			</tr>
		</tbody>
	</table>
</div>
@stop