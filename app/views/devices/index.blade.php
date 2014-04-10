@extends('layouts.master')

@section('title')
<title>Devices</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<table class="table table-bordered table-striped">
		<thead>
			<th>ID</th>
			<th>Acquistion Type</th>
			<th>Manufacturer</th>
			<th>Model</th>
			<th>Purchased By</th>
			<th>High Price</th>
			<th>Acquisition Cost</th>
			<th>Acquisition Grade</th>
			<th>Purchase Date</th>
		</thead>
		<tbody>
			@foreach ($devices as $device)
			<tr>
				<td>{{{ $device->id }}}</td>
				<td>{{{ $device->acquisition_type }}}</td>
				<td>{{{ $device->manufacturer }}}</td>
				<td>{{{ $device->model }}}</td>
				<td>{{{ $device->purchased_by }}}</td>
				<td>{{{ $device->high_price }}}</td>
				<td>{{{ $device->acquisition_cost }}}</td>
				<td>{{{ $device->acquisition_grade_abc }}}</td>
				<td>{{{ $device->created_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
			@endforeach
	</table>
</div>


@stop