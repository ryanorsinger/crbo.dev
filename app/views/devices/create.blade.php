@extends('layouts.master')

@section('title')
<title>Acquisition Procedure Form</title>
@stop

@section('style')
<style>
#price-box	
{ 
	position:fixed; top:2%; right:2%;
	background-color: #7bd63e;
	color: #FFF;
	width: 200px;
	height: 50px;
	text-align: center;
	border-radius: 25%;
}

#price-text
{
	vertical-align: middle;
	font-size: 1.5em;
}
</style>
@stop


@section('content')
<div class="container" ng-controller="CreateController">
<h1 class="page-header">210Geeks.com &nbsp; Buy Back Procedure Form</h1>
	<div>
	<row>
	{{ Form::open(array('action' => 'DevicesController@store', 'class' => 'form-inline', 'id' => 'priceForm')) }}
		<div class="col-lg-6">	
		<h2>Device Information</h2>
			<div class="well">
				<div class="form-inline">
					<label class="acquisition_type" id="acquisition_type">Acquisition Type &nbsp;</label>
					<label class="radio">
						<input type="radio" name="acquisition_type" value="Buy-back"/>
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
							<input type="radio" name="manufacturer" value="{{ $manufacturer->company }}" data-price="{{ $manufacturer->price }}"/>
						    {{ $manufacturer->company }}
						@endforeach
				</div>
				<br>
				<div class="form-group">
					<label for="model" value="model">Model:
					<input class="form-control" type="text" name="model"/>
					</label>
				</div>
			</div>
			<div class="well" id="cpus">
				<div class="form-inline">Processor &nbsp; 
					<input type="text" autofocus="autofocus" id="cpu_search" placeholder="type in processor">
					@foreach($cpus as $cpu)
						<label class="radio">
						<input type="radio" name="cpu" value="{{ $cpu->id }}" data-price="{{ $cpu->price }}"/>
						{{ $cpu->make }}
						{{ $cpu->model }}
						{{ $cpu->number_of_cores }}
						{{ $cpu->speed }}
					@endforeach
				</div>
			</div>
			<div class="well" id="hdds">
				<div class="form-inline">Hard Drive
					@foreach($hdds as $hdd)
						<label class="radio">
						<input type="radio" name="hdd" value="{{ $hdd->id }}" data-price="{{ $hdd->price }}"/>
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
						<input type="radio" name="ram" value="{{ $ram->id }}" data-price="{{ $ram->price }}"/>
						{{ $ram->type }}
						{{ $ram->speed }}
						{{ $ram->size }}
					@endforeach
				</div>

		</div>

		</div>
	<div class="col-lg-6">
		<h3>System Checks</h3>
			<div class="well">
				<div class="form-inline">
					<label class="network_boot" id="physical_damage">Does the machine have physical damage? &nbsp;</label>
					<label class="radio">
						<input type="radio" name="physical_damage" value="yes"/>
						&nbsp;Yes&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="physical_damage" value="no"/>
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
					<label class="motherboard_capacitor" id="motherboard_capacitors">Motherboard capacitors good?&nbsp;</label>
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
					<label class="pcmci_slot_condition" id="pcmci_slot">PCMCI slot good? &nbsp;</label>
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
					<label class="network_boot" id="network_port">Network Port good?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="network_port" value="pass"/>
						Pass&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="network_port" value="failed"/>
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
					<label class="network_boot" id="optical_drive_type">What type of optical drive?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="optical_drive_type" value="CD-RW"/>
						CD-RW&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="optical_drive_type" value="DVD-RW"/>
						DVD-RW&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="optical_drive_type" value="other"/>
						other&nbsp;
					</label>
				</div>
				<div class="form-inline">
					<label class="network_boot" id="optical_drive_works">Optical Drive Works?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="optical_drive_works" value="yes"/>
						Yes&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="optical_drive_works" value="no"/>
						No&nbsp;
					</label>
					<label class="radio">
					<input type="radio" name="restore_partition_or_media" value="missing"/>
						Missing&nbsp;
				</div>
				<div class="form-inline">
					<label class="network_boot" id="internal_wifi">Internal Wifi Good?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="internal_wifi" value="yes"/>
						pass&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="internal_wifi" value="no"/>
						fail&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="internal_wifi" value="no"/>
						missing&nbsp;
					</label>
				</div>
				<div class="form-inline">
					<label class="network_boot" id="internal_sound">Internal sound?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="internal_sound" value="pass"/>
						Yes&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="internal_sound" value="fail"/>
						No&nbsp;
					</label>
				</div>
				<div class="form-inline">
					<label class="network_boot" id="power_connector_snug">Power Connector snug?&nbsp;</label>
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
					<label class="network_boot" id="laptop_battery">Laptop Battery&nbsp;</label>
					<label class="radio">
						<input type="radio" name="laptop_battery" value="good"/>
						Good&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="laptop_battery" value="bad"/>
						Bad&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="laptop_battery" value="missing"/>
						missing&nbsp;
					</label>
				</div>
				<div class="form-inline">
					<label class="network_boot" id="keyboard_condition">Keyboard Condition?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="keyboard_condition" value="good"/>
						Good&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="keyboard_condition" value="bad"/>
						Bad&nbsp;
					</label>
				</div>
				<div class="form-inline">
					<label class="network_boot" id="loud_fans">Are there loud fans?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="loud_fans" value="yes"/>
						Yes&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="loud_fans" value="yes"/>
						No&nbsp;
					</label>
				</div>
				<div class="form-inline">
					<label class="network_boot" id="laptop_screen_condition">Laptop Screen condition?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="laptop_screen_condition" value="good"/>
						Good&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="laptop_screen_condition" value="bad"/>
						Bad or damaged&nbsp;
					</label>
				</div>
				<div class="form-inline">
					<label class="network_boot" id="laptop_power_charger">Laptop power charger?&nbsp;</label>
					<label class="radio">
						<input type="radio" name="laptop_power_charger" value="yes"/>
						Working&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="laptop_power_charger" value="yes"/>
						Missing or nonfunctional&nbsp;
					</label>
				</div>
				<div class="form-horizontal">
					<label for="laptop_screen_size" class="col-sm-4 control-label">Laptop Screen Size</label>
   					<div class="col-sm-8">
      				<input type="text" class="form-control" id="laptop_screen_size" placeholder="laptop screen size">
				</div>
				<br>
				</div>
			</div>
  		</div>
  	</div>	
  	</div>		
  	</row>

<row>
	<div class="col-md-2">
	</div>

	<div class="col-md-8">
		<div class="form-inline">
			<h4>
				<label class="network_boot" id="acquisition_grade_abc">Product Grade?&nbsp;</label>
				<label class="radio">
					<input type="radio" name="acquisition_grade_abc" value="a"/>
					A&nbsp;
				</label>
				<label class="radio">
					<input type="radio" name="acquisition_grade_abc" value="b"/>
					B&nbsp;
				</label>
				<label class="radio">	
				<input type="radio" name="acquisition_grade_abc" value="c"/>
					C&nbsp;
				</label>
			</h4>
		</div>
			<div class="textarea">
				<h4>Additional Buy-Back or Recycle Comments:</h4>
				<textarea class="form-control" name="acquisition_comments" id="acquisition_comments" rows="4"></textarea>
			</div>
		<br>
		<div class="well">
			
			<br>
	  		<div class="input-group" id="buy_back_cost_display">
		  		<span class="input-group-addon">Buy Back Cost &nbsp; $</span>
		  		<label for="acquisition_cost"></label>
		  		<input type="text" name="acquisition_cost" id="acquisition_cost" class="form-control">
		  		<span class="input-group-addon">.00</span>
			</div>
			<input type="hidden" name="high_price" id="disabledInput">
		<br>
		<button type="submit" class="btn btn-primary btn-lg btn-block">Add Device to Database</button>
		</div>

	{{ Form::close() }}
	
	</div>
	
	<div class="col-md-1">
	</div>
	
	
	<!-- <button type="submit" class="btn btn-default">Add Device </button>	 -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="price-box">
	<span id="price-text">HIGH PRICE: 0</span>
</div>


@stop

@section('bottom-script')
<script>

		var cpu = 0;
		var hdd = 0;
		var ram = 0;
		var manufacturer = 0;
		var price = 0;

		// $('#ram-1').on('click', function() {
		// 	// price = price + 1;
		// 	console.log($(this).html());
		// 	// $('#price-number').html("HIGH PRICE: " . price);
		// });

		$('#priceForm input').on('change', function() {
			if (($.isNumeric($('input[name=ram]:checked', '#priceForm').data("price"))) &&
				($.isNumeric($('input[name=cpu]:checked', '#priceForm').data("price"))) &&
				($.isNumeric($('input[name=hdd]:checked', '#priceForm').data("price"))) &&
				($.isNumeric($('input[name=manufacturer]:checked', '#priceForm').data("price")))) {
				   ram = $('input[name=ram]:checked', '#priceForm').data("price");
				   cpu = $('input[name=cpu]:checked', '#priceForm').data("price");
				   hdd = $('input[name=hdd]:checked', '#priceForm').data("price");
				   manufacturer = $('input[name=manufacturer]:checked', '#priceForm').data("price");

				   price = (ram + cpu + hdd + manufacturer);

				   $('#disabledInput').attr('value', price);
				   $('#price-box').html("<span id='price-text'>HIGH PRICE: " + price + "</span>");
			}
		});


</script>
@stop