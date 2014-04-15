@extends('layouts.master')

@section('title')
<title>Manufacturers</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		{{ Form::open(array('action' => 'ManufacturersController@store', 'class' => 'form-inline', 'role' => 'form')) }}
		<div class="form-group">
			{{ Form::label('company', 'Company:') }}
			{{ Form::text('company') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('price', 'Price:') }}
			{{ Form::text('price') }}
		</div>&nbsp;
		<button class="btn btn-success" type="submit">Add Item</button>
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
			<th></th>
		</thead>
		<tbody>
			@foreach ($manufacturers as $manufacturer)
			<tr>
				<td><a href="{{{ action('ManufacturersController@edit', $manufacturer->id) }}}"> {{{ $manufacturer->id }}} </a>&nbsp;</td>
				<td>{{{ $manufacturer->company }}}</td>				
				<td>{{{ $manufacturer->price }}}</td>
				<td>{{{ $manufacturer->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
				<td>{{ Form::open(array('action' => array('ManufacturersController@destroy', $manufacturer->id), 'method' => 'DELETE')) }}
					<button class="btn btn-danger" type="submit">Delete Row</button>
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@stop