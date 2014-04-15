<?php

class ManufacturersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufacturers = Manufacturer::all();


		$data = array(
			'manufacturers' => $manufacturers, 
			);

		return View::make('manufacturers/index')->with($data);
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$manufacturer = new Manufacturer();
		$manufacturer->company = Input::get('company');
		$manufacturer->price = Input::get('price');
		$manufacturer->save();

		return Redirect::action('ManufacturersController@index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @pamanufacturer  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @pamanufacturer  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturer = Manufacturer::find($id);
		
		return View::make('manufacturers/edit')->with('manufacturer', $manufacturer);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @pamanufacturer  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manufacturer = Manufacturer::find($id);
		
		$manufacturer->company = Input::get('company');
		$manufacturer->price = Input::get('price');
		$manufacturer->save();

		return Redirect::action('ManufacturersController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @pamanufacturer  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manufacturer::find($id)->delete();
		return Redirect::action('ManufacturersController@index');
	}

}