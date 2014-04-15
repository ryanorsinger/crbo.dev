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
	<b>ID: {{{ $device->id }}} &nbsp;

	Acquisition Type: {{{ $device->acquisition_type }}} &nbsp;

	Hardware Type: {{{ $device->hardware_type }}} &nbsp;

	Manufacturer: {{{ $device->manufacturer }}} &nbsp;

	Model: {{{ $device->model }}}</b>

	<br>
	<br>
	<center><table class="table table-bordered table-striped">
		<thead>
			<th>Field</th>
			<th>Buyback</th>
			<th>Refurbish Technician Confirm or Disagree</th>
			{{ Form::model($device, (array('action' => array('DevicesController@update', $device->id), 'method' => 'put', 'class' => 'form-horizontal'))) }}
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
					<label class="refurb_access_bios" id="refurb_network_slot"></label>
					<label class="radio">
						<input type="radio" name="refurb_network_slot" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_network_slot" value="disagree"/>
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
					<label class="refurb_access_bios" id="refurb_fans_run_loud"></label>
					<label class="radio">
						<input type="radio" name="refurb_fans_run_loud" value="confirm"/>
						&nbsp;Confirm&nbsp;
					</label>
					<label class="radio">
						<input type="radio" name="refurb_fans_run_loud" value="disagree"/>
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
				<br>
				<div class="well form-horizontal">
			  		<div class="form-group">
						<label for="inputOStype" class="col-sm-2 control-label">OS License Type</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_1" type="text" class="form-control" id="inputOStype" placeholder="OS License Type">
						</div>
			  		</div>
			  		<div class="form-group">
						<label for="inputOScost" class="col-sm-2 control-label">OS License Cost</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_1_cost" type="text" class="form-control" id="inputOScost" placeholder="OS License Cost">
						</div>
			  		</div>
			  		<hr>
			  		<div class="form-group">
						<label for="inputOStype" class="col-sm-2 control-label">Additional Part</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_2" type="text" class="form-control" id="inputOStype" placeholder="Additional Part">
						</div>
			  		</div>
			  		<div class="form-group">
						<label for="inputOScost" class="col-sm-2 control-label">Part Cost</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_2_cost" type="text" class="form-control" id="inputOScost" placeholder="Part cost">
						</div>
			  		</div>
			  		<br>
			  		<div class="form-group">
						<label for="inputOStype" class="col-sm-2 control-label">Additional Part</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_3" type="text" class="form-control" id="inputOStype" placeholder="Additional Part">
						</div>
			  		</div>
			  		<div class="form-group">
						<label for="inputOScost" class="col-sm-2 control-label">Part Cost</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_3_cost" type="text" class="form-control" id="inputOScost" placeholder="Part Cost">
						</div>
			  		</div>
			  		<br>
			  		<div class="form-group">
						<label for="inputOStype" class="col-sm-2 control-label">Additional Part</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_4" type="text" class="form-control" id="inputOStype" placeholder="Additional Part">
						</div>
			  		</div>
			  		<div class="form-group">
						<label for="inputOScost" class="col-sm-2 control-label">Part Cost</label>
						<div class="col-sm-10">
				  		<input name="replacement_part_4_cost" type="text" class="form-control" id="inputOScost" placeholder="Part Cost">
						</div>
			  		</div>
				</div>
			<label for="refurb-comments">Refurbish Technician Comments:</label>	
			<textarea name="refurb_comments" id="refurb-comments" class="form-control" rows="3"></textarea>
			

			<br>

			<label for="exampleInputEmail1">Refurbish Status</label>
				<select class="form-control">
				  <option>Ready to Refurbish</option>
				  <option>Processing</option>
				  <option>e-parts</option>
				  <option>Scrap</option>
				  <option>Done</option>
				</select>

			<hr>

			<button type="button" class="btn btn-primary btn-lg btn-block">Submit Refurbish</button>
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