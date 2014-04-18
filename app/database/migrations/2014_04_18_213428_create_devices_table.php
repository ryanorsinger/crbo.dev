<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('devices', function($table)
		{
			$table->increments('id');            
			$table->string('acquisition_type', 50)->nullable();;
			$table->string('hardware_type', 50)->nullable();
			$table->string('manufacturer', 50)->nullable();
			$table->string('model', 50)->nullable();
			$table->string('network_boot', 25)->nullable();
			$table->string('mem_test', 25)->nullable();
			$table->string('hdd_test', 25)->nullable();
			$table->string('machine_powers_on', 25)->nullable();
			$table->string('bios_accessible', 25)->nullable();
			$table->string('readable_os_license', 25)->nullable();
			$table->string('motherboard_capacitors', 25)->nullable();
			$table->string('missing_loose_parts', 25)->nullable();
			$table->string('usb_port_condition', 25)->nullable();
			$table->string('pcmcia_slot', 25)->nullable();
			$table->string('network_port', 25)->nullable();
			$table->string('restore_partition_or_media', 25)->nullable();
			$table->string('optical_drive_type', 25)->nullable();
			$table->string('optical_drive_works', 25)->nullable();
			$table->string('internal_wifi', 25)->nullable();
			$table->string('internal_sound', 25)->nullable();
			$table->string('laptop_screen_size', 25)->nullable();
			$table->string('laptop_screen_condition', 25)->nullable();
			$table->string('laptop_power_charger', 25)->nullable();
			$table->string('power_connector_snug', 25)->nullable();
			$table->string('laptop_battery', 25)->nullable();
			$table->string('keyboard_condition', 25)->nullable();
			$table->string('loud_fans', 100)->nullable();
			$table->string('purchased_by', 50)->nullable();
			$table->integer('acquisition_cost')->nullable();
			$table->text('acquisition_comments')->nullable();
			$table->string('acquisition_grade_abc', 50)->nullable();
			$table->string('refurb_machine_powers_on', 25)->nullable();
			$table->string('refurb_network_boot', 25)->nullable();
			$table->string('refurb_mem_test', 25)->nullable();
			$table->string('refurb_hdd_test', 25)->nullable();
			$table->string('refurb_keyboard_needs_replacement', 25)->nullable();
			$table->string('refurb_fans_run_loud', 25)->nullable();
			$table->string('refurb_power_connector_snug', 25)->nullable();
			$table->string('refurb_laptop_battery', 25)->nullable();
			$table->string('refurb_access_bios', 25)->nullable();
			$table->string('refurb_test_bios_battery', 25)->nullable();
			$table->string('refurb_os_license_readable', 25)->nullable();
			$table->string('refurb_motherboard_capacitors', 25)->nullable();
			$table->string('refurb_usb_condition', 25)->nullable();
			$table->string('refurb_missing_loose_parts', 25)->nullable();
			$table->string('refurb_pcmcia_slot', 25)->nullable();
			$table->string('refurb_network_port',25)->nullable();
			$table->string('refurb_restore_partition_or_media', 25)->nullable();
			$table->string('refurb_optical_drive_type', 25)->nullable();
			$table->string('refurb_optical_drive_condition', 25)->nullable();
			$table->string('refurb_internal_wifi', 25)->nullable();
			$table->string('refurb_internal_sound', 25)->nullable();
			$table->string('refurb_laptop_screen_size', 25)->nullable();
			$table->string('refurb_laptop_screen_condition', 25)->nullable();
			$table->string('refurb_laptop_power_charger', 25)->nullable();
			$table->string('refurb_laptop_battery_condition', 50)->nullable();
			$table->string('refurb_keyboard_condition', 25)->nullable();
			$table->string('refurb_loud_fans', 25)->nullable();
			$table->string('refurb_refurbished_by', 50)->nullable();
			$table->string('refurb_grade_abc', 50)->nullable();
			$table->string('replacement_part1', 50)->nullable();
			$table->float('replacement_part1_cost')->nullable();
			$table->string('replacement_part2', 50)->nullable();
			$table->float('replacement_part2_cost')->nullable();
			$table->string('replacement_part3', 50)->nullable();
			$table->float('replacement_part3_cost')->nullable();
			$table->string('replacement_part4', 50)->nullable();
			$table->float('replacement_part4_cost')->nullable();
			$table->text('refurbisher_comments')->nullable();
			$table->integer('refurb_cost')->nullable();
			$table->integer('high_price')->nullable();
			$table->integer('total_cost')->nullable();
			$table->string('status', 50)->nullable();
			$table->string('physical_damage', 20)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('devices');
	}

}
