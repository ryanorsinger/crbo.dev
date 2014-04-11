@extends('layouts.master')

@section('title')
<title></title>

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
			<th>Refurbish</th>
		</thead>
		<tbody>
			<tr>
				<td>Network Boot?</td>
				<td>{{{ $device->network_boot }}}</td>
				<td>{{{ $device->refurb_network_boot }}}</td>
			</tr>
			<tr>
				<td>Memory Test:</td>
				<td>{{{ $device->mem_test }}}</td>
				<td>{{{ $device->refurb_mem_test }}}</td>
			</tr>
			<tr>
				<td>Hard Drive Test:</td>
				<td>{{{ $device->hdd_test }}}</td>
				<td>{{{ $device->refurb_hdd_test }}}</td>
			</tr>
			<tr>
				<td>Machine Powers On?</td>
				<td>{{{ $device->machine_powers_on }}}</td>
				<td>{{{ $device->refurb_machine_powers_on }}}</td>
			</tr>
			<tr>
				<td>Bios Accessible?</td>
				<td>{{{ $device->bios_accessible }}}</td>
				<td>{{{ $device->refurb_access_bios }}}</td>
			</tr>
			<tr>
				<td>Readabale OS License?</td>
				<td>{{{ $device->readable_os_license }}}</td>
				<td>{{{ $device->refurb_os_license_readable }}}</td>
			</tr>
			<tr>
				<td>Motherboard Capacitors:</td>
				<td>{{{ $device->motherboard_capacitors }}}</td>
				<td>{{{ $device->refurb_motherboard_capacitors }}}</td>
			</tr>
			<tr>
				<td>Missing Loose Parts?</td>
				<td>{{{ $device->missing_loose_parts }}}</td>
				<td>{{{ $device->refurb_missing_loose_parts }}}</td>
			</tr>
			<tr>
				<td>USB Port Condition:</td>
				<td>{{{ $device->usb_port_condition }}}</td>
				<td>{{{ $device->refurb_usb_condition }}}</td>
			</tr>
			<tr>
				<td>PCMCIA Slot:</td>
				<td>{{{ $device->pcmcia_slot }}}</td>
				<td>{{{ $device->refurb_pcmcia_slot }}}</td>
			</tr>
			<tr>
				<td>Network Port:</td>
				<td>{{{ $device->network_port }}}</td>
				<td>{{{ $device->refurb_network_slot }}}</td>
			</tr>
			<tr>
				<td>Restore Partition or Media?</td>
				<td>{{{ $device->restore_partition_or_media }}}</td>
				<td>{{{ $device->refurb_restore_partition_or_media }}}</td>
			</tr>
			<tr>
				<td>Optical Drive Type:</td>
				<td>{{{ $device->optical_drive_type }}}</td>
				<td>{{{ $device->refurb_optical_drive_type }}}</td>
			<tr>
				<td>Optical Drive Works?</td>
				<td>{{{ $device->optical_drive_works }}}</td>
			</tr>
			<tr>
				<td>Internal WiFi?</td>
				<td>{{{ $device->internal_wifi }}}</td>
				<td>{{{ $device->refurb_internal_wifi }}}</td>
			</tr>
			<tr>
				<td>Internal Sound:</td>
				<td>{{{ $device->internal_sound }}}</td>
				<td>{{{ $device->refurb_internal_sound }}}</td>
			</tr>
			<tr>
				<td>Laptop Screen Size:</td>
				<td>{{{ $device->laptop_screen_size }}}</td>
				<td>{{{ $device->refurb_laptop_screen_size }}}</td>
			</tr>
			<tr>
				<td>Laptop Screen Condition:</td>
				<td>{{{ $device->laptop_screen_condition }}}</td>
				<td>{{{ $device->refurb_laptop_screen_condition }}}</td>
			</tr>
			<tr>
				<td>Laptop Power Charger:</td>
				<td>{{{ $device->laptop_power_charger }}}</td>
				<td>{{{ $device->refurb_laptop_power_charger }}}</td>
			</tr>
			<tr>
				<td>Is Power Connector Snug?</td>
				<td>{{{ $device->power_connector_snug }}}</td>
				<td>{{{ $device->refurb_power_connector_snug }}}</td>
			</tr>
			<tr>
				<td>Laptop Battery Inlcuded?</td>
				<td>{{{ $device->laptop_battery }}}</td>
				<td>{{{ $device->refurb_laptop_battery_condition }}}</td>
			</tr>
			<tr>
				<td>Does Keyboard Need Replacement?</td>
				<td>{{{ $device->keyboard_condition }}}</td>
				<td>{{{ $device->refurb_keyboard_condition }}}</td>
			</tr>
			<tr>
				<td>Are Fans Loud?:</td>
				<td>{{{ $device->loud_fans }}}</td>
				<td>{{{ $device->refurb_fans_run_loud }}}</td>
			</tr>
			<tr>
				<td>Purchased By:</td>
				<td>{{{ $device->purchased_by }}}</td>
			</tr>
			<tr>
				<td>Acquisition Cost:</td>
				<td>{{{ $device->acquisition_cost }}}</td>
			</tr>
			<tr>
				<td>Acquisition Comments:</td>
				<td>{{{ $device->acquisiton_comments }}}</td>
			</tr>
			<tr>
				<td>Acqusition Grade:</td>
				<td>{{{ $device->acquisiton_grade_abc }}}</td>
				<td>{{{ $device->refurb_grade_abc }}}</td>
			</tr>
			<tr>
				<td>Bios Battery Test:</td>
				<td>{{{ $device->refurb_test_bios_battery }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->refurb_optical_drive_condition }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->refurb_refurbished_by }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->replacement_part_1 }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->replacement_part_1_cost }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->replacement_part_2 }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->replacement_part_2_cost }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->replacement_part_3 }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->replacement_part_3_cost }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->replacement_part_4 }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->replacement_part_4_cost }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->refurbisher_comments }}}</td>
			</tr>
			<tr>
				<td>ID:</td>
				<td>{{{ $device->refurb_cost }}}</td>
			</tr>
	</table></center>
</div>


@stop