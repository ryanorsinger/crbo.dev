<?php

class RamsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rams = Ram::all();


		$data = array(
			'rams' => $rams, 
			);

		return View::make('rams/index')->with($data);
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
		$ram = new Ram();
		$ram->type = Input::get('type');
		$ram->speed = Input::get('speed');
		$ram->size = Input::get('size');
		$ram->price = Input::get('price');
		$ram->save();

		return Redirect::action('RamsController@index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ram = Ram::find($id);
		
		return View::make('rams/edit')->with('ram', $ram);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ram = Ram::find($id);
		
		$ram->type = Input::get('type');
		$ram->size = Input::get('size');
		$ram->speed = Input::get('speed');
		$ram->price = Input::get('price');
		$ram->save();

		return Redirect::action('RamsController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ram::find($id)->delete();
		return Redirect::action('RamsController@index');
	}

}