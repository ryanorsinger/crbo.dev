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
			<label class="network_boot" id="memtest">Memtest Pass&nbsp;</label>
			<label class="radio">
				<input type="radio" name="mem_test" value="pass"/>
				&nbsp;Pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="mem_test" value="fail"/>
				&nbsp;Fail&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="mem_test" value="none"/>
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
			<label class="network_boot" id="bios_accessible">Is Bios Accessible &nbsp;</label>
			<label class="radio">
				<input type="radio" name="bios_accessible" value="yes"/>
				&nbsp;Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="bios_accessible" value="no"/>
				&nbsp;No&nbsp;
			</label>
		</div>
		
		<div class="form-inline">
			<label class="network_boot" id="readable_os_license">OS License Readable/Present &nbsp;</label>
			<label class="radio">
				<input type="radio" name="readable_os_license" value="yes"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="readable_os_license" value="no"/>
				No&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="motherboard_capacitors">Motherboard capacitors good?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="motherboard_capacitors" value="yes"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="motherboard_capacitors" value="no"/>
				No&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="missing_loose_parts" id="missing_loose_parts">Are there missing or loose parts? &nbsp;</label>
			<label class="radio">
				<input type="radio" name="missing_loose_parts" value="yes"/>
				yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="missing_loose_parts" value="no"/>
				no&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="usb_port_condition" id="usb_port_condition">USB port condition&nbsp;</label>
			<label class="radio">
				<input type="radio" name="usb_port_condition" value="good"/>
				Good&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="usb_port_condition" value="good"/>
				Bad&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">PCMCI slot good? &nbsp;</label>
			<label class="radio">
				<input type="radio" name="pcmci_slot" value="good"/>
				Good&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="pcmcia_slot" value="bad"/>
				Bad&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="network_boot">Network Port good?&nbsp;</label>
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
			<label class="network_boot" id="restore_partition_or_media">Is there a restore partition or original restore media?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="yes"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="no"/>
				No&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="restore_partition_or_media">What type of optical drive?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="yes"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="no"/>
				No&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="restore_partition_or_media">Optical Drive Works?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="yes"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="no"/>
				No&nbsp;
			</label>
			<input type="radio" name="restore_partition_or_media" value="missing"/>
				Missing&nbsp;
		</div>
		<div class="form-inline">
			<label class="network_boot" id="restore_partition_or_media">Internal Wifi Good?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="yes"/>
				pass&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="no"/>
				fail&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="no"/>
				missing&nbsp;
			</label>
		</div>
		<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="no"/>
				fail&nbsp;
			</label>
		<div class="form-inline">
			<label class="network_boot" id="restore_partition_or_media">Internal sound?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="pass"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="restore_partition_or_media" value="fail"/>
				No&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="restore_partition_or_media">Power Connector snug?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="power_connector_snug" value="yes"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="power_connector_snug" value="no"/>
				No&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="restore_partition_or_media">Laptop Battery&nbsp;</label>
			<label class="radio">
				<input type="radio" name="power_connector_snug" value="good"/>
				Good&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="power_connector_snug" value="bad"/>
				Bad&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="power_connector_snug" value="missing"/>
				missing&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="keyboard_condition">Keyboard Condition?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="keyboard_condition" value="good"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="keyboard_condition" value="bad"/>
				No&nbsp;
			</label>
		</div>
		<div class="form-inline">
			<label class="network_boot" id="loud_fans">Are there loud fans?&nbsp;</label>
			<label class="radio">
				<input type="radio" name="loud_fans" value="good"/>
				Yes&nbsp;
			</label>
			<label class="radio">
				<input type="radio" name="loud_fans" value="bad"/>
				No&nbsp;
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