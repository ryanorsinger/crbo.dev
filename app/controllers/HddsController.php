<?php

class HddsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hdds = Hdd::all();


		$data = array(
			'hdds' => $hdds, 
			);

		return View::make('hdds/index')->with($data);
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
		$hdd = new Hdd();
		$hdd->form_factor = Input::get('form_factor');
		$hdd->interface = Input::get('interface');
		$hdd->capacity = Input::get('capacity');
		$hdd->price = Input::get('price');
		$hdd->save();

		return Redirect::action('HddsController@index');
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
		$hdd = Hdd::find($id);
		
		return View::make('hdds/edit')->with('hdd', $hdd);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$hdd = Hdd::find($id);
		
		$hdd->form_factor = Input::get('form_factor');
		$hdd->interface = Input::get('interface');
		$hdd->capacity = Input::get('capacity');
		$hdd->price = Input::get('price');
		$hdd->save();

		return Redirect::action('HddsController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Hdd::find($id)->delete();
		return Redirect::action('HddsController@index');
	}

}