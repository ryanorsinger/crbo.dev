@extends('layouts.master')

@section('title')
<title>Processors</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		{{ Form::model($manufacturer, array('action' => array('ManufacturersController@update', $manufacturer->id), 'method' => 'PUT', 'class' => 'form-inline')) }}
		<div class="form-group">
			{{ Form::label('company', 'Company:') }}
			{{ Form::text('company') }}
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
			<th>Company</th>
			<th>Price</th>
			<th>Last Updated</th>
		</thead>
		<tbody>
			<tr>
				<td>{{{ $manufacturer->id }}}</td>
				<td>{{{ $manufacturer->company }}}</td>				
				<td>{{{ $manufacturer->price }}}</td>
				<td>{{{ $manufacturer->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
			</tr>
		</tbody>
	</table>
</div>
@stop