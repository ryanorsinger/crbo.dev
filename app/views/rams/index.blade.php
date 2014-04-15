@extends('layouts.master')

@section('title')
<title>Memory</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<div>
		{{ Form::open(array('action' => 'RamsController@store', 'class' => 'form-inline', 'role' => 'form')) }}
		<div class="form-group">
			{{ Form::label('type', 'Type:') }}
			{{ Form::text('type') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('speed', 'Speed:') }}
			{{ Form::text('speed') }}
		</div>&nbsp;
		<div class="form-group">
			{{ Form::label('size', 'Size:') }}
			{{ Form::text('size') }}
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
			<th>Type</th>
			<th>Speed</th>
			<th>Size</th>
			<th>Price</th>
			<th>Last Updated</th>
			<th></th>
		</thead>
		<tbody>
			@foreach ($rams as $ram)
			<tr>
				<td><a href="{{{ action('RamsController@edit', $ram->id) }}}"> {{{ $ram->id }}} </a>&nbsp;</td>
				<td>{{{ $ram->type }}}</td>				
				<td>{{{ $ram->speed }}}</td>
				<td>{{{ $ram->size }}}</td>
				<td>{{{ $ram->price }}}</td>
				<td>{{{ $ram->updated_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
				<td>{{ Form::open(array('action' => array('RamsController@destroy', $ram->id), 'method' => 'DELETE')) }}
					<button class="btn btn-danger" type="submit">Delete Row</button>
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@stop