@extends('layouts.master')

@section('title')
<title>Processors</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		{{ Form::open(array('action' => 'CpusController@store', 'class' => 'form-inline', 'role' => 'form')) }}
		<div class="form-group">
			{{ Form::label('make', 'Make:') }}
			{{ Form::text('make') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('model', 'Model:') }}
			{{ Form::text('model') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('number_of_cores', 'Number_of_Cores:') }}
			{{ Form::text('number_of_cores') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('speed', 'Speed:') }}
			{{ Form::text('speed') }}
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
			<th>Make</th>
			<th>Model</th>
			<th>Number of Cores</th>
			<th>Speed</th>
			<th>Price</th>
			<th>Last Updated</th>
			<th></th>
		</thead>
		<tbody>
			@foreach ($cpus as $cpu)
			<tr>
				<td><a href="{{{ action('CpusController@edit', $cpu->id) }}}"> {{{ $cpu->id }}} </a>&nbsp;</td>
				<td>{{{ $cpu->make }}}</td>				
				<td>{{{ $cpu->model }}}</td>
				<td>{{{ $cpu->number_of_cores }}}</td>
				<td>{{{ $cpu->speed }}}</td>
				<td>{{{ $cpu->price }}}</td>
				<td>{{{ $cpu->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
				<td>{{ Form::open(array('action' => array('CpusController@destroy', $cpu->id), 'method' => 'DELETE')) }}
					<button class="btn btn-danger" type="submit">Delete Row</button>
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@stop