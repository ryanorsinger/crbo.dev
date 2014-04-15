@extends('layouts.master')

@section('title')
<title>Memory</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		{{ Form::model($ram, array('action' => array('RamsController@update', $ram->id), 'method' => 'PUT', 'class' => 'form-inline')) }}
		<div class="form-group">
			{{ Form::label('type', 'Type:') }}
			{{ Form::text('type') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('size', 'Size:') }}
			{{ Form::text('size') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('speed', 'Speed:') }}
			{{ Form::text('speed') }}
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
			<th>Type</th>
			<th>Speed</th>
			<th>Size</th>
			<th>Price</th>
			<th>Last Updated</th>
		</thead>
		<tbody>
			<tr>
				<td>{{{ $ram->id }}}</td>
				<td>{{{ $ram->type }}}</td>				
				<td>{{{ $ram->speed }}}</td>
				<td>{{{ $ram->size }}}</td>
				<td>{{{ $ram->price }}}</td>
				<td>{{{ $ram->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
			</tr>
		</tbody>
	</table>
</div>
@stop