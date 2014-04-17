@extends('layouts.master')

@section('title')
<title>Refurb technician view</title>

@stop

@section('style')
<style>
	#box {
		width: 800px;
	}


</style>

@stop

@section('content')
<div class="container-fluid" id="box">
	<row>
		<b>ID: {{{ $device->id }}} &nbsp;

		Acquisition Type: {{{ $device->acquisition_type }}} &nbsp;

		Hardware Type: {{{ $device->hardware_type }}} &nbsp;

		Manufacturer: {{{ $device->manufacturer }}} &nbsp;

		Model: {{{ $device->model }}}</b>
	</row>
	<row>
		<br>
		<p>Acquisition price: $ {{{ $device->acquisition_cost }}} &nbsp;</p>
		<br>
		Acquisition comments: {{{ $device->acquisition_comments }}}

	</row>

	<br>
	<br>
	<center><table class="table table-bordered table-striped">
		<thead>
			<th>Field</th>
			<th>Buyback</th>
			<th>Refurbish Technician Confirm or Disagree</th>
			{{ Form::model($device, (array('action' => array('DevicesController@update', $device->id), 'method' => 'put', 'id' => 'refurbPricer', 'class' => 'form-horizontal'))) }}
		</thead>
		<tbody>
			<tr>
				<td>Network Boot?</td>
				<td>{{{ $device->network_boot }}}</td>
				<td><div class="form-inline">
					<label class="refurb_network_boot" id="network_boot"></label>
					<label class="radio">
						<input type="radio" name="refurb_network_boot" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_network_boot" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div>	
				</td>

			</tr>
			<tr>
				<td>Memory Test:</td>
				<td>{{{ $device->mem_test }}}</td>
				<td><div class="form-inline">
					<label class="refurb_mem_test" id="refurb_mem_test"></label>
					<label class="radio">
						<input type="radio" name="refurb_mem_test" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_mem_test" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
					</td>
			</tr>
			<tr>
				<td>Hard Drive Test:</td>
				<td>{{{ $device->hdd_test }}}</td>
				<td><div class="form-inline">
					<label class="refurb_mem_test" id="refurb_hdd_test"></label>
					<label class="radio">
						<input type="radio" name="refurb_hdd_test" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_hdd_test" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label></td>
			</tr>
			<tr>
				<td>Machine Powers On?</td>
				<td>{{{ $device->machine_powers_on }}}</td>
				<td><div class="form-inline">
					<label class="refurb_network_boot" id="refurb_machine_powers_on"></label>
					<label class="radio">
						<input type="radio" name="refurb_machine_powers_on" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_machine_powers_on" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Bios Accessible?</td>
				<td>{{{ $device->bios_accessible }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_access_bios"></label>
					<label class="radio">
						<input type="radio" name="refurb_access_bios" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_access_bios" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Readabale OS License?</td>
				<td>{{{ $device->readable_os_license }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_os_license_readable"></label>
					<label class="radio">
						<input type="radio" name="refurb_os_license_readable" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_os_license_readable" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Motherboard Capacitors:</td>
				<td>{{{ $device->motherboard_capacitors }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_motherboard_capacitors"></label>
					<label class="radio">
						<input type="radio" name="refurb_motherboard_capacitors" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_motherboard_capacitors" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div>
				</td>
			</tr>
			<tr>
				<td>Missing Loose Parts?</td>
				<td>{{{ $device->missing_loose_parts }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_missing_loose_parts"></label>
					<label class="radio">
						<input type="radio" name="refurb_missing_loose_parts" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_missing_loose_parts" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div>
			</td>
			</tr>
			<tr>
				<td>USB Port Condition:</td>
				<td>{{{ $device->usb_port_condition }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_usb_condition"></label>
					<label class="radio">
						<input type="radio" name="refurb_usb_condition" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_usb_condition" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div>
			</td>
			</tr>
			<tr>
				<td>PCMCIA Slot:</td>
				<td>{{{ $device->pcmcia_slot }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_pcmcia_slot "></label>
					<label class="radio">
						<input type="radio" name="refurb_pcmcia_slot" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_pcmcia_slot" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Network Port:</td>
				<td>{{{ $device->network_port }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_network_port"></label>
					<label class="radio">
						<input type="radio" name="refurb_network_port" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_network_port" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Restore Partition or Media?</td>
				<td>{{{ $device->restore_partition_or_media }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_restore_partition_or_media"></label>
					<label class="radio">
						<input type="radio" name="refurb_restore_partition_or_media" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_restore_partition_or_media" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Optical Drive Type:</td>
				<td>{{{ $device->optical_drive_type }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_optical_drive_type"></label>
					<label class="radio">
						<input type="radio" name="refurb_optical_drive_type" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_optical_drive_type" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			<tr>
				<td>Optical Drive Works?</td>
				<td>{{{ $device->optical_drive_works }}} </td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_optical_drive_condition"></label>
					<label class="radio">
						<input type="radio" name="refurb_optical_drive_condition" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_optical_drive_condition" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Internal WiFi?</td>
				<td>{{{ $device->internal_wifi }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_internal_wifi"></label>
					<label class="radio">
						<input type="radio" name="refurb_internal_wifi" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_internal_wifi" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Internal Sound:</td>
				<td>{{{ $device->internal_sound }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_internal_sound"></label>
					<label class="radio">
						<input type="radio" name="refurb_internal_sound" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_internal_sound" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Laptop Screen Size:</td>
				<td>{{{ $device->laptop_screen_size }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_laptop_screen_size"></label>
					<label class="radio">
						<input type="radio" name="refurb_laptop_screen_size" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_laptop_screen_size" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Laptop Screen Condition:</td>
				<td>{{{ $device->laptop_screen_condition }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_laptop_screen_condition"></label>
					<label class="radio">
						<input type="radio" name="refurb_laptop_screen_condition" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_laptop_screen_condition" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Laptop Power Charger:</td>
				<td>{{{ $device->laptop_power_charger }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_laptop_power_charger"></label>
					<label class="radio">
						<input type="radio" name="refurb_laptop_power_charger" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_laptop_power_charger" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Is Power Connector Snug?</td>
				<td>{{{ $device->power_connector_snug }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_power_connector_snug"></label>
					<label class="radio">
						<input type="radio" name="refurb_power_connector_snug" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_power_connector_snug" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Laptop Battery Inlcuded?</td>
				<td>{{{ $device->laptop_battery }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_laptop_battery_condition"></label>
					<label class="radio">
						<input type="radio" name="refurb_laptop_battery_condition" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_laptop_battery_condition" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Does Keyboard Need Replacement?</td>
				<td>{{{ $device->keyboard_condition }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_keyboard_condition"></label>
					<label class="radio">
						<input type="radio" name="refurb_keyboard_condition" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_keyboard_condition" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Are Fans Loud?:</td>
				<td>{{{ $device->loud_fans }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_loud_fans"></label>
					<label class="radio">
						<input type="radio" name="refurb_loud_fans" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_loud_fans" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
			<tr>
				<td>Grade of Machine</td>
				<td>{{{ $device->acquisition_grade_abc }}}</td>
				<td><div class="form-inline">
					<label class="refurb_access_bios" id="refurb_grade_abc"></label>
					<label class="radio">
						<input type="radio" name="refurb_grade_abc" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_grade_abc" value="disagree"/>
						&nbsp;Disagree&nbsp;
					</label>
				</div></td>
			</tr>
	</table></center>
</div>
<div class="container">
	<row>
		<div class="col-md-1">
		</div>

		<div class="col-md-10">
			<div class="well">
				<div class="form-inline">
					<label class="refurb_access_bios" id="refurb_test_bios_battery">Test Bios Battery Results? &nbsp; </label>
					<label class="radio">
						<input type="radio" name="refurb_test_bios_battery" value="pass"/>
						&nbsp;Pass&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_test_bios_battery" value="fail"/>
						&nbsp;Fail&nbsp;
					</label>
				</div>
				<hr>
				<label for="exampleInputEmail1">Refurbish Status</label>
					<select name="status" class="form-control">
					  <option name="status" value="ready">Ready to Refurbish</option>
					  <option name="status" value="processing">Processing</option>
					  <option name="status" value="e-parts">e-parts</option>
					  <option name="status" value="scrap">Scrap</option>
					  <option name="status" value="done">Done</option>
					</select>
				<br>
				<div class="well form-horizontal">
			  		<div class="form-group">
						<label for="replacement_part_1" class="col-sm-2 control-label">OS License Type</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_1" type="text" class="form-control" id="inputOStype" placeholder="OS License Type">
						</div>
			  		</div>
			  		<div class="form-group">
						<label for="replacement_part_1_cost" class="col-sm-2 control-label">OS License Cost</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_1_cost" id="replacement_part_1_cost" type="text" class="form-control" id="inputOScost" placeholder="OS License Cost">
						</div>
			  		</div>
			  		<hr>
			  		<div class="form-group">
						<label for="replacement_part_2" class="col-sm-2 control-label">Additional Part</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_2" type="text" class="form-control" id="inputOStype" placeholder="Additional Part">
						</div>
			  		</div>
			  		<div class="form-group">
						<label for="replacement_part_2_cost" class="col-sm-2 control-label">Part Cost</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_2_cost" id="replacement_part_2_cost" type="text" class="form-control" id="inputOScost" placeholder="Part cost">
						</div>
			  		</div>
			  		<br>
			  		<div class="form-group">
						<label for="replacement_part_3" class="col-sm-2 control-label">Additional Part</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_3" type="text" class="form-control" id="inputOStype" placeholder="Additional Part">
						</div>
			  		</div>
			  		<div class="form-group">
						<label for="replacement_part_3_cost" class="col-sm-2 control-label">Part Cost</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_3_cost" id="replacement_part_3_cost" type="text" class="form-control" id="inputOScost" placeholder="Part Cost">
						</div>
			  		</div>
			  		<br>
			  		<div class="form-group">
						<label for="replacement_part_4" class="col-sm-2 control-label">Additional Part</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_4" type="text" class="form-control" id="inputOStype" placeholder="Additional Part">
						</div>
			  		</div>
			  		<div class="form-group">
						<label for="replacement_part_4_cost" class="col-sm-2 control-label">Part Cost</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_4_cost" id="replacement_part_4_cost" type="text" class="form-control" id="inputOScost" placeholder="Part Cost">
						</div>
			  		</div>
			  		<hr>
			  		<h4 id="acquisition_cost" name="acquisition_cost" value="{{ $device->acquisition_cost }}" data-price="{{ $device->acquisition_cost }}"> Acquisition Cost: ${{{ $device->acquisition_cost }}} <h4>
			  		<h4 id="refurbish_cost" name="refurbish_cost" > Refurbish Cost: 0 </h4>
			  		<h4 id="total_cost" name="total_cost"> Total Cost: 0 </h4>

				</div>
			<label for="refurb-comments">Refurbish Technician Comments:</label>	
			<textarea name="refurb_comments" id="refurb-comments" class="form-control" rows="3"></textarea>
		
			<hr>

			<!-- 
			<div class="input-group" id="refurbish_cost_div">
		  		<span class="input-group-addon">Refurbish Cost &nbsp; $</span>
		  		<label for="refurb_cost"></label>
		  		<input type="text" name="refurb_cost" id="refurb_cost" class="form-control">
		  		<span class="input-group-addon">.00</span>
			</div> -->


			<a href="{{ action('DevicesController@update', $device->id) }}">
			<button type="button" class="btn btn-primary btn-lg btn-block">Submit Refurbish</button>
			</a>
			{{ Form::close() }}
			<br>
			<br>

			</div>
		</div>


		<div class="col-md-1">
		</div>
	</row>
	<row></row>
</div>



@stop
@section('bottom-script')
<script>


	$('#refurbPricer input').on('change', function() {

		var refurbCost = 0;
		var totalCost = 0;
		var acquisitionCost = 0;
		var part1Cost = 0;
		var part2Cost = 0;
		var part3Cost = 0;
		var part4Cost = 0;
	
		acquisition_cost = (acquisition_cost.attributes['value'].value);
		acquisitionCost = parseInt(acquisition_cost); 
	
		$("#replacement_part_1_cost").on('change', function() {	

			if ($.isNumeric($('#replacement_part_1_cost').val()))
				{
					part1_cost = $('#replacement_part_1_cost').val();
				}
			part1Cost = parseInt(part1_cost)	
			
			return part1Cost;
		});

		$("#replacement_part_2_cost").on('change', function() {	

			if ($.isNumeric($('#replacement_part_2_cost').val()))
				{
					part1_cost = $('#replacement_part_2_cost').val();
				}
			part2Cost = parseInt(part2_cost)	

			return part2Cost;
			
		});

		$("#replacement_part_3_cost").on('change', function() {	

			if ($.isNumeric($('#replacement_part_3_cost').val()))
				{
					part1_cost = $('#replacement_part_3_cost').val();
				}
			part3Cost = parseInt(part3_cost)	
			return part3Cost;			
		});

		$("#replacement_part_4_cost").on('change', function() {	

			if ($.isNumeric($('#replacement_part_4_cost').val()))
				{
					part4_cost = $('#replacement_part_4_cost').val();
				}

			part4Cost = parseInt(part4_cost)				
			return part4Cost;			
		});


		refurbishCost = (part1Cost + part2Cost + part3Cost + part4Cost);
		totalCost = parseInt(refurbishCost) + parseInt(acquisitionCost);

		$('#refurbish_cost').attr('value', refurbishCost);	

		$('#total_cost').attr('value', price);
		
	});

</script>

@stop
