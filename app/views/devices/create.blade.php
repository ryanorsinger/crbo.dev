@extends('layouts.master')

@section('title')
<title>Acquisition Procedure Form</title>
@stop

@section('style')
<!-- css to center the header
css to add styling to other stuff -->
@stop


@section('content')
<div class="container">
<h1 class="page-header">210Geeks.com &nbsp; Buy Back Procedure Form</h1>
<div>
<row>
	{{ Form::open(array('action' => 'DevicesController@store', 'class' => 'form-inline')) }}
<div class="col-lg-6">	
<h2>Device Information</h2>
	<div class="well">
		<div class="form-inline">
			<label class="acquisition_type" id="acquisition_type">Acquisition Type &nbsp;</label>
			<label class="radio">
				<input type="radio" name="acquisition_type" value="refurbish"/>
				Buy Back&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="acquisition_type" value="recycle"/>
				Recycle&nbsp;
		 	</label>
	</div>
	<div class="form-inline">
		<label class="hardware_type" id="hardware_type">Hardware Type &nbsp;</label>
		<label class="radio">
			<input type="radio" name="hardware_type" value="laptop"/>
			Laptop&nbsp;
		</label>
		<label class="radio">
			<input type="radio" name="hardware_type" value="desktop"/>
			Desktop&nbsp;
		 </label>
	</div>
</div>
<div class="well" id="manufacturer">
	<div class="form-inline">Manufacturer
			@foreach($manufacturers as $manufacturer)	
				<label class="radio"> 
				<input type="radio" name="manufacturer" value="{{ $manufacturer->id }}"/>
			    {{ $manufacturer->company }}
			@endforeach
	</div>
</div>
<div class="well" id="cpus">
	<div class="form-inline">Processor
		@foreach($cpus as $cpu)
			<label class="radio">
			<input type="radio" name="{{ $cpu->id }}" value="{{ $cpu->id }}"/>
			{{ $manufacturer->company }}
		@endforeach
	</div>
</div>
<div class="well" id="hdds">
	<div class="form-inline">Hard Drive
		@foreach($hdds as $hdd)
			<label class="radio">
			<input type="radio" name="{{ $hdd->id }}" value="{{ $hdd->id }}"/>
			{{ $hdd->form_factor }}
			{{ $hdd->interface }}
			{{ $hdd->capacity }}
		@endforeach
	</div>
</div>
<div class="well" id="rams">
	<div class="form-inline">Memory
		@foreach($rams as $ram)
			<label class="radio">
			<input type="radio" name="{{ $ram->id }}" value="{{ $ram->id }}"/>
			{{ $ram->type }}
			{{ $ram->speed }}
			{{ $ram->size }}
		@endforeach
	</div>
</div>
			
</div>
<div class="col-lg-6">
<h3>Checks</h3>
	<div class="well">
		<div class="form-inline">
			<label class="network_boot" id="machine_powers_on">Machine powers on &nbsp;</label>
			<label class="radio">
				<input type="radio" name="machine_powers_on" value="pass"/>
				&nbsp;Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="machine_powers_on" value="fail"/>
				&nbsp;No&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Boot &nbsp;</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="pass"/>
				&nbsp;Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="fail"/>
				&nbsp;Fail&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="memtest">Memtest &nbsp;</label>
			<label class="radio">
				<input type="radio" name="memtest" value="pass"/>
				&nbsp;Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="memtest" value="fail"/>
				&nbsp;Fail&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="memtest" value="no_memory"/>
				&nbsp;No memory present&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="hdd_test">Hard Drive Test &nbsp;</label>
			<label class="radio">
				<input type="radio" name="hdd_test" value="pass"/>
				Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="hdd_test" value="failed"/>
				Fail&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="hdd_test" value="no_drive"/>
				No drive present&nbsp;
			</label>

		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Boot &nbsp;</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="pass"/>
				Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="failed"/>
				Fail&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Boot &nbsp;</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="pass"/>
				Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="failed"/>
				Fail&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Boot &nbsp;</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="pass"/>
				Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="failed"/>
				Fail&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Boot &nbsp;</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="pass"/>
				Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="failed"/>
				Fail&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Boot &nbsp;</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="pass"/>
				Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="failed"/>
				Fail&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Boot &nbsp;</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="pass"/>
				Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="failed"/>
				Fail&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Boot &nbsp;</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="pass"/>
				Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="network_boot" value="failed"/>
				Fail&nbsp;
			</label>
		</div>
	</div>
</div>

</div>

	<button type="submit" class="btn btn-default">Add </button>	
	{{ Form::close() }}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




@stop