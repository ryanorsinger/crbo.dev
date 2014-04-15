@extends('layouts.master')

@section('title')
<title>Hard Drives</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		{{ Form::open(array('action' => 'HddsController@store', 'class' => 'form-inline', 'role' => 'form')) }}
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
		<button class="btn btn-success" type="submit">Add Item</button>
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
			<th></th>
		</thead>
		<tbody>
			@foreach ($hdds as $hdd)
			<tr>
				<td><a href="{{{ action('HddsController@edit', $hdd->id) }}}"> {{{ $hdd->id }}} </a>&nbsp;</td>
				<td>{{{ $hdd->form_factor }}}</td>
				<td>{{{ $hdd->interface }}}</td>
				<td>{{{ $hdd->capacity }}}</td>				
				<td>{{{ $hdd->price }}}</td>
				<td>{{{ $hdd->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
				<td>{{ Form::open(array('action' => array('HddsController@destroy', $hdd->id), 'method' => 'DELETE')) }}
					<button class="btn btn-danger" type="submit">Delete Row</button>
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@stop