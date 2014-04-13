<?php

class ManufacturersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$manufacturers = Manufacturer::all();
		$manufacturers = DB::table('manufacturers')->get();

		// $search = Input::get('search');
		// $manufacturers = Manufacturer::all();

		// if (is_null($search))
		// {
		// 	$posts = $query->paginate(3);
		// } else {
		// 	$posts = $query->where('title', 'LIKE', "%{$search}%")
		// 				   ->orWhere('body', 'LIKE', "%{$search}%")
		// 				   ->paginate(3);
		// }

		// return View::make('posts.index')->with('manufacturers', $manufacturers);
		// return View::share('manufacturers', $manufacturers);
		
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
		//
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