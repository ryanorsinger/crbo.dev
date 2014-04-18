@extends('layouts.master')

@section('title')
<title>Devices</title>

@stop

@section('style')


@stop

@section('content')
<div class="container-fluid">
	<table class="table table-bordered table-striped" id="myTable">
		<thead>
			<th>ID</th>
			<th>Manufacturer</th>
			<th>Model</th>
			<th>Purchased By</th>
			<th>Acquisition Grade</th>
			<th>Purchase Date</th>
			<th>Status</th>
			<th></th>
		</thead>
		<tbody>
			@foreach ($devices as $device)
			<tr>
				<td>{{{ $device->id }}}</td>
				<td>{{{ $device->manufacturer }}}</td>
				<td>{{{ $device->model }}}</td>
				<td>{{{ $device->purchased_by }}}</td>
				<td>{{{ $device->acquisition_grade_abc }}}</td>
				<td>{{{ $device->created_at->setTimezone('America/Chicago')->format('m / d') }}}</td>
				<td>{{{ $device->status }}}</td>
				<td><center><a href="{{{ action('DevicesController@edit', $device->id) }}}"> <button type="button" class="btn btn-primary">Refurbish</button></a></center></td>				
			</tr>
			@endforeach
	</table>
</div>


@stop

@section('bottom-script')

<script type="text/javascript" src="js/jquery.tablesorter.js"></script> 
<script>
    $("#myTable").tablesorter(); 
</script>

@stop


