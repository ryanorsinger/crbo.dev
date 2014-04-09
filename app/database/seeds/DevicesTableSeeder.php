<?php

class DevicesTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('devices')->delete();

		$device = new Device();
		$device->acquisition_type = "admin";
		$device->hardware_type = 'password';
        $device->manufacturer = 'Dell';
        $device->model = 'Inspiron';
        $device->network_boot = 'pass';
        $device->mem_test = 'pass';
        $device->hdd_test = 'pass';
        $device->machine_powers_on = 'yes';
        $device->bios_accessible = 'yes';
        $device->readable_os_license = 'no';
        $device->motherboard_capacitors = 'good';
        $device->missing_loose_parts = 'no';
        $device->usb_port_condition = 'good';
        $device->pcmcia_slot = 'good';
        $device->network_port = 'good';
        $device->restore_partition_or_media = 'yes';
        $device->optical_drive_type = null;
        $device->optical_drive_works = null;
        $device->internal_wifi = 'pass';
        $device->internal_sound = 'pass';
        $device->laptop_screen_size = '13.3';
        $device->laptop_screen_condition = 'good';
        $device->laptop_power_charger = 'yes';
        $device->power_connector_snug = 'yes';
        $device->laptop_battery = null;
        $device->keyboard_condition = 'good';
        $device->loud_fans = 'no';
        $device->purchased_by = 'tech';
        $device->acquisition_cost = 150;
        $device->acquisition_comments = 'Minor scratches on exterior';
        $device->acquisition_grade_abc = 'A';
        $device->refurb_machine_powers_on = null;
        $device->refurb_network_boot = null;
        $device->refurb_mem_test = null;
        $device->refurb_hdd_test = null;
        $device->refurb_keyboard_needs_replacement = null;
        $device->refurb_fans_run_loud = null;
        $device->refurb_power_connector_snug = null;
        $device->refurb_laptop_battery = null;
        $device->refurb_access_bios = null;
        $device->refurb_test_bios_battery = null;
        $device->refurb_os_license_readable = null;
        $device->refurb_motherboard_capacitors = null;
        $device->refurb_usb_condition = null;
        $device->refurb_missing_loose_parts = null;
        $device->refurb_pcmcia_slot = null;
        $device->refurb_network_port = null;
        $device->refurb_restore_partition_or_media = null;
        $device->refurb_optical_drive_type = null;
        $device->refurb_optical_drive_condition = null;
        $device->refurb_internal_wifi = null;
        $device->refurb_internal_sound = null;
        $device->refurb_laptop_screen_size = null;
        $device->refurb_laptop_screen_condition = null;
        $device->refurb_laptop_power_charger = null;
        $device->refurb_laptop_battery_condition = null;
        $device->refurb_keyboard_condition = null;
        $device->refurb_loud_fans = null;
        $device->refurb_refurbished_by = null;
        $device->refurb_grade_abc = null;
        $device->replacement_part1 = null;
        $device->replacement_part1_cost = null
        $device->replacement_part2 = null;
        $device->replacement_part2_cost = null;
        $device->replacement_part3 = null;
        $device->replacement_part3_cost = null;
        $device->replacement_part4 = null;
        $device->replacement_part4_cost = null;
        $device->refurbisher_comments = null;
        $device->refurb_cost = null;
        $device->save();



	}
}