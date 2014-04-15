<?php

class CpusController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cpus = Cpu::all();


		$data = array(
			'cpus' => $cpus, 
			);

		return View::make('cpus/index')->with($data);
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
		$cpu = new Cpu();
		$cpu->make = Input::get('make');
		$cpu->model = Input::get('model');
		$cpu->number_of_cores = Input::get('number_of_cores');
		$cpu->speed = Input::get('speed');
		$cpu->price = Input::get('price');
		$cpu->save();

		return Redirect::action('CpusController@index');
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
		$cpu = Cpu::find($id);
		
		return View::make('cpus/edit')->with('cpu', $cpu);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cpu = Cpu::find($id);
		
		$cpu->make = Input::get('make');
		$cpu->model = Input::get('model');
		$cpu->number_of_cores = Input::get('number_of_cores');
		$cpu->speed = Input::get('speed');
		$cpu->price = Input::get('price');
		$cpu->save();

		return Redirect::action('CpusController@index');
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cpu::find($id)->delete();
		return Redirect::action('CpusController@index');
	}

}