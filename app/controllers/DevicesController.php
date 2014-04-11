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

		return View::make('devices/index')->with('devices', $devices);
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

		$data = array(
			'devices' => $devices,
			'manufacturers' => $manufacturers,
			'hdds' => $hdds,
			'rams' => $rams,
			'cpus' => $cpus
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
		//
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
		return View::make('devices/edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
