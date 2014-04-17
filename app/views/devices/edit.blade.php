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
		</thead>
		<tbody>
			{{ Form::model($device, array('action' => array('DevicesController@update', $device->id), 'method' => 'put', 'id' => 'refurbPricer', 'class' => 'form-horizontal')) }}
			<tr>
				<td>Network Boot?</td>
				<td>{{{ $device->network_boot }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_network_boot', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_network_boot', 'disagree') }} &nbsp;
					</div>	
				</td>
			</tr>
			<tr>
				<td>Memory Test:</td>
				<td>{{{ $device->mem_test }}}</td>
				<td>
					<div class="form-inline">
					{{ Form::label('confirm', 'Confirm') }}&nbsp;
					{{ Form::radio('refurb_mem_test', 'confirm') }} &nbsp;
					{{ Form::label('disagree', 'Disagree') }}&nbsp;
					{{ Form::radio('refurb_mem_test', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Hard Drive Test:</td>
				<td>{{{ $device->hdd_test }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_hdd_test', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_hdd_test', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Machine Powers On?</td>
				<td>{{{ $device->machine_powers_on }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_machine_powers_on', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_machine_powers_on', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Bios Accessible?</td>
				<td>{{{ $device->bios_accessible }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_machine_access_bios', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_machine_access_bios', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Readabale OS License?</td>
				<td>{{{ $device->readable_os_license }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_os_license_readable', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_os_license_readable', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Motherboard Capacitors:</td>
				<td>{{{ $device->motherboard_capacitors }}}</td>
				<td>
					<div class="form-inline">					
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_motherboard_capacitors', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_motherboard_capacitors', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Missing Loose Parts?</td>
				<td>{{{ $device->missing_loose_parts }}}</td>
				<td>
					<div class="form-inline">					
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_missing_loose_parts', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_missing_loose_parts', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>USB Port Condition:</td>
				<td>{{{ $device->usb_port_condition }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_usb_condition', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_usb_condition', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>PCMCIA Slot:</td>
				<td>{{{ $device->pcmcia_slot }}}</td>
				<td><div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_pcmcia_slot', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_pcmcia_slot', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Network Port:</td>
				<td>{{{ $device->network_port }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_network_port', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_network_port', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Restore Partition or Media?</td>
				<td>{{{ $device->restore_partition_or_media }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_restore_partition_or_media', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_restore_partition_or_media', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Optical Drive Type:</td>
				<td>{{{ $device->optical_drive_type }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_optical_drive_type', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_optical_drive_type', 'disagree') }} &nbsp;
					</div>
				</td>
			<tr>
				<td>Optical Drive Works?</td>
				<td>{{{ $device->optical_drive_works }}} </td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_optical_drive_condition', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_optical_drive_condition', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Internal WiFi?</td>
				<td>{{{ $device->internal_wifi }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_internal_wifi', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_internal_wifi', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Internal Sound:</td>
				<td>{{{ $device->internal_sound }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_internal_sound', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_internal_sound', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Laptop Screen Size:</td>
				<td>{{{ $device->laptop_screen_size }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_laptop_screen_size', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_laptop_screen_size', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Laptop Screen Condition:</td>
				<td>{{{ $device->laptop_screen_condition }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_screen_condition', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_screen_condition', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Laptop Power Charger:</td>
				<td>{{{ $device->laptop_power_charger }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_laptop_power_charger', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_laptop_power_charger', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Is Power Connector Snug?</td>
				<td>{{{ $device->power_connector_snug }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_machine_power_connector_snug', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_machine_power_connector_snug', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Laptop Battery Inlcuded?</td>
				<td>{{{ $device->laptop_battery }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_laptop_battery_condition', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_laptop_battery_condition', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Does Keyboard Need Replacement?</td>
				<td>{{{ $device->keyboard_condition }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_keyboard_condition', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_keyboard_condition', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Are Fans Loud?:</td>
				<td>{{{ $device->loud_fans }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_loud_fans', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_loud_fans', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
			<tr>
				<td>Grade of Machine</td>
				<td>{{{ $device->acquisition_grade_abc }}}</td>
				<td>
					<div class="form-inline">
						{{ Form::label('confirm', 'Confirm') }}&nbsp;
						{{ Form::radio('refurb_grade_abc', 'confirm') }} &nbsp;
						{{ Form::label('disagree', 'Disagree') }}&nbsp;
						{{ Form::radio('refurb_grade_abc', 'disagree') }} &nbsp;
					</div>
				</td>
			</tr>
		</tbody>
	</table></center>
</div>
<div class="container">
	<row>
		<div class="col-md-1">
		</div>

		<div class="col-md-10">
			<div class="well">
				<div class="form-inline">
					<p>Bios Battery Test: &nbsp;
					{{ Form::label('pass', 'Pass') }}&nbsp;
					{{ Form::radio('refurb_test_bios_battery', 'pass') }} &nbsp;
					{{ Form::label('fail', 'Fail') }}&nbsp;
					{{ Form::radio('refurb_test_bios_battery', 'fail') }} &nbsp;</p>
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
			  			<div class="col-sm-2 control-label">
							{{ Form::label('replacement_part1', 'OS License Type') }}
						</div>
						<div class="col-sm-10">
				  			{{ Form::text('replacement_part1', null, array('class' => 'form-control')) }}
						</div>
			  		</div>
			  		<div class="form-group">
						<div class="col-sm-2 control-label">
							{{ Form::label('replacement_part1_cost', 'OS License Cost') }}
						</div>
						<div class="col-sm-10">
				  			{{ Form::text('replacement_part1_cost', null, array('class' => 'form-control', 'id' => 'replacement_part_1_cost')) }}
						</div>
			  		</div>
			  		<hr>
			  		<div class="form-group">
						<div class="col-sm-2 control-label">
							{{ Form::label('replacement_part2', 'Additional Part') }}
						</div>
						<div class="col-sm-10">
				  			{{ Form::text('replacement_part2', null, array('class' => 'form-control')) }}
						</div>
			  		</div>
			  		<div class="form-group">
						<div class="col-sm-2 control-label">
							{{ Form::label('replacement_part2_cost', 'OS License Cost') }}
						</div>
						<div class="col-sm-10">
				  			{{ Form::text('replacement_part2_cost', null, array('class' => 'form-control', 'id' => 'replacement_part_2_cost')) }}
						</div>
			  		</div>
			  		<br>
			  		<div class="form-group">
						<div class="col-sm-2 control-label">
							{{ Form::label('replacement_part3', 'Additional Part') }}
						</div>
						<div class="col-sm-10">
				  			{{ Form::text('replacement_part3', null, array('class' => 'form-control')) }}
						</div>
			  		</div>
			  		<div class="form-group">
						<div class="col-sm-2 control-label">
							{{ Form::label('replacement_part3_cost', 'OS License Cost') }}
						</div>
						<div class="col-sm-10">
				  			{{ Form::text('replacement_part3_cost', null, array('class' => 'form-control', 'id' => 'replacement_part_3_cost')) }}
						</div>
			  		</div>
			  		<br>
			  		<div class="form-group">
						<div class="col-sm-2 control-label">
							{{ Form::label('replacement_part4', 'Additional Part') }}
						</div>
						<div class="col-sm-10">
				  			{{ Form::text('replacement_part4', null, array('class' => 'form-control')) }}
						</div>
			  		</div>
			  		<div class="form-group">
						<div class="col-sm-2 control-label">
							{{ Form::label('replacement_part4_cost', 'OS License Cost') }}
						</div>
						<div class="col-sm-10">
				  			{{ Form::text('replacement_part4_cost', null, array('class' => 'form-control', 'id' => 'replacement_part_4_cost')) }}
						</div>
			  		</div>
			  		<hr>
			  		<h4 id="acquisition_cost" name="acquisition_cost" value="{{ $device->acquisition_cost }}" data-price="{{ $device->acquisition_cost }}"> Acquisition Cost: ${{{ $device->acquisition_cost }}} </h4>
			  		<h4 id="refurbish_cost" name="refurbish_cost" > Refurbish Cost: 0 </h4>
			  		<h4 id="total_cost" name="total_cost"> Total Cost: 0 </h4>

				</div>
			{{ Form::label('refurbisher_comments', 'Refurbish Technician Comments') }}
			{{ Form::textarea('refurbisher_comments', null, array('class' => 'form-control', 'rows' => '3')) }}
			<hr>

			<!-- 
			<div class="input-group" id="refurbish_cost_div">
		  		<span class="input-group-addon">Refurbish Cost &nbsp; $</span>
		  		<label for="refurb_cost"></label>
		  		<input type="text" name="refurb_cost" id="refurb_cost" class="form-control">
		  		<span class="input-group-addon">.00</span>
			</div> -->
			<input type="hidden" name="total_cost" id="totalCost">
			<input type="hidden" name="refurb_cost" id="refurbishCost">
			<button type="submit" class="btn btn-primary btn-lg btn-block">Submit Refurbish</button>
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

	var refurbCost = 0;
	var totalCost = 0;
	var acquisitionCost = 0;
	var part1Cost = 0;
	var part2Cost = 0;
	var part3Cost = 0;
	var part4Cost = 0;

	function calculate() {
		
		acquisitionCost = parseInt($('#acquisition_cost').data('price')); 	

		if ($.isNumeric($('#replacement_part_1_cost').val()))
			{
				part1Cost = parseInt($('#replacement_part_1_cost').val());
			}

		if ($.isNumeric($('#replacement_part_2_cost').val()))
			{
				part2Cost = parseInt($('#replacement_part_2_cost').val());
			}

		if ($.isNumeric($('#replacement_part_3_cost').val()))
			{
				part3Cost = parseInt($('#replacement_part_3_cost').val());
			}

		if ($.isNumeric($('#replacement_part_4_cost').val()))
			{
				part4Cost = parseInt($('#replacement_part_4_cost').val());
			}	

		refurbCost = (part1Cost + part2Cost + part3Cost + part4Cost);
		totalCost = acquisitionCost + refurbCost;

		$('#refurbishCost').attr('value', refurbCost);	

		$('#totalCost').attr('value', totalCost);

		$('#refurbish_cost').html( "Refurbish Cost: " + refurbCost);

		$('#total_cost').html( "Total Cost: " + totalCost);		
	}

	calculate();

	$('input').on('change', calculate);

</script>

@stop
