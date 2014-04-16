<?php

class DevicesController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$devices = Device::all();


		$data = array(
			'devices' => $devices, 
			);

		return View::make('devices/index')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		

		$devices = Device::all();
		$manufacturers = Manufacturer::all();
		$hdds = Hdd::all();
		$rams = Ram::all();
		$cpus = Cpu::all();
		$users = User::all();

		$data = array(
			'devices' => $devices,
			'manufacturers' => $manufacturers,
			'hdds' => $hdds,
			'rams' => $rams,
			'cpus' => $cpus,
			'users' => $users
			);

		return View::make('devices/create')->with($data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
		$validator = Validator::make(Input::all(), Device::$rules);

		// attempt validation
		if ($validator->fails())
		{
			// validation failed, redirect to the post create page with validation errors and old inputs
			Session::flash('errorMessage', 'Post could not be created - see form errors');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			// Save to db - validation succeeded, create and save the post, redirect to index when done
			Log::info(Input::all());
			$device = new Device();
			$device->acquisition_type = Input::get('acquisition_type');
			$device->model = Input::get('model');
			$device->purchased_by = Auth::user()->username;
			$device->hardware_type = Input::get('hardware_type');
			$device->physical_damage = Input::get('physical_damage');
			$device->network_boot = Input::get('network_boot');
			$device->mem_test = Input::get('mem_test');
			$device->hdd_test = Input::get('hdd_test');
			$device->machine_powers_on = Input::get('machine_powers_on');
			$device->bios_accessible = Input::get('bios_accessible');
			$device->readable_os_license = Input::get('readable_os_license');
			$device->motherboard_capacitors = Input::get('motherboard_capacitors');
			$device->missing_loose_parts = Input::get('missing_loose_parts');
			$device->usb_port_condition = Input::get('usb_port_condition');
			$device->pcmcia_slot = Input::get('pcmcia_slot');
			$device->network_port = Input::get('network_port');
			$device->restore_partition_or_media = Input::get('restore_partition_or_media');
			$device->optical_drive_type = Input::get('optical_drive_type');
			$device->optical_drive_works = Input::get('optical_drive_works');
			$device->internal_wifi = Input::get('internal_wifi');
			$device->internal_sound = Input::get('internal_sound');
			$device->laptop_screen_size = Input::get('laptop_screen_size');
			$device->laptop_screen_condition = Input::get('laptop_screen_condition');
			$device->laptop_power_charger = Input::get('laptop_power_charger');
			$device->power_connector_snug = Input::get('power_connector_snug');
			$device->laptop_battery = Input::get('laptop_battery');
			$device->keyboard_condition = Input::get('keyboard_condition');
			$device->loud_fans = Input::get('loud_fans');
			$device->acquisition_cost = Input::get('acquisition_cost');
			$device->acquisition_comments = Input::get('acquisition_comments');
			$device->acquisition_grade_abc = Input::get('acquisition_grade_abc');
			$device->high_price = Input::get('high_price');

			$device->manufacturer = (Input::get('manufacturer'));

			$device->save();
			
			//$device->manufacturers()->sync(array(Input::get('manufacturer')));
			$device->cpus()->sync(array(Input::get('cpu'))); 
			$device->rams()->sync(array(Input::get('ram')));
			$device->hdds()->sync(array(Input::get('hdd')));
			
			return Redirect::action('DevicesController@index');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$device = Device::find($id);
		
		return View::make('devices/show')->with('device', $device);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		Log::info(Input::all());

		$device = Device::find($id);		

		return View::make('devices/edit')->with('device', $device);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$device = Device::find($id);
		// create the validator
	    $validator = Validator::make(Input::all(), Device::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	       	Session::flash('errorMessage', 'Device could not be updated - see form errors');

   	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {    
		    $device->refurb_machine_powers_on = Input::get('refurb_machine_powers_on');
		    $device->network_boot = Input::get('refurb_network_boot');
		    $device->refurb_mem_test = Input::get('refurb_mem_test');
		    $device->refurb_hdd_test = Input::get('refurb_hdd_test');
		    $device->refurb_power_connector_snug = Input::get('refurb_power_connector_snug');
		    $device->refurb_laptop_battery = Input::get('refurb_test_bios_battery');
		    $device->refurb_access_bios = Input::get('refurb_access_bios');
		    $device->refurb_test_bios_battery = Input::get('');
		    $device->refurb_os_license_readable = Input::get('refurb_os_license_readable');
		    $device->refurb_motherboard_capacitors = Input::get('refurb_motherboard_capacitors');
		    $device->refurb_usb_condition = Input::get('refurb_usb_condition');
		    $device->refurb_missing_loose_parts = Input::get('refurb_missing_loose_parts');
		    $device->refurb_pcmcia_slot = Input::get('refurb_pcmcia_slot');
		    $device->refurb_network_port = Input::get('refurb_network_port');
		    $device->refurb_restore_partition_or_media = Input::get('refurb_restore_partition_or_media');
		    $device->refurb_optical_drive_type = Input::get('refurb_optical_drive_type');
		    $device->refurb_optical_drive_condition = Input::get('refurb_optical_drive_condition');
		    $device->refurb_internal_wifi = Input::get('refurb_internal_wifi');
		    $device->refurb_internal_sound = Input::get('refurb_internal_sound');
		    $device->refurb_laptop_screen_size = Input::get('refurb_laptop_screen_size');
		    $device->refurb_laptop_screen_condition = Input::get('refurb_laptop_screen_condition');
		    $device->refurb_laptop_power_charger = Input::get('refurb_laptop_power_charger');
		    $device->refurb_laptop_battery_condition = Input::get('refurb_laptop_battery_condition');
		    $device->refurb_keyboard_condition = Input::get('refurb_keyboard_condition');
		    $device->refurb_loud_fans = Input::get('refurb_loud_fans');
		    $device->refurb_grade_abc = Input::get('refurb_grade_abc');
		    $device->replacement_part1 = Input::get('replacement_part_1');
		    $device->replacement_part1_cost = Input::get('replacement_part_1_cost');
		    $device->replacement_part2 = Input::get('replacement_part_2');
		    $device->replacement_part2_cost = Input::get('replacement_part_2_cost');
		    $device->replacement_part3 = Input::get('replacement_part_3');
		    $device->replacement_part3_cost = Input::get('replacement_part_3_cost');
		    $device->replacement_part4 = Input::get('replacement_part_4');
		    $device->replacement_part4_cost = Input::get('replacement_part_4_cost');
		    $device->refurbisher_comments = Input::get('refurb_comments');
		    $device->refurb_cost = Input::get('refurb_cost');
		    $device->status = Input::get('status');
		    $device->total_cost = Input::get('total_cost');

		    $device->save();

		   	Session::flash('successMessage', 'Device Refurb updated successfully');
	    	
	    	return Redirect::action('DevicesController@index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// add the flash message here
		$device = Device::findOrFail($id);
		$device->delete();
		return "Delete request process successfull.";
	}
}
