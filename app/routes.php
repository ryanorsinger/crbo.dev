<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');

Route::resource('/devices', 'DevicesController');

Route::resource('/ram', 'RamController');

Route::resource('/hdd', 'HddController');

Route::resource('/cpu', 'CpuController');

Route::resource('/manufacturer', 'ManufacturerController');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('ajax/get', function()
{
	Log::info("Received get.");
	Log::info(Input::all());

	$reply = array('error' => fasle, 'message' => "Here is a message from the server.");
	return Response::json($reply);

});

Route::post('ajax/post', function()
{
	Log::info("received post.");
	Log::info(Input::all());

	$reply = array('error' => false, 'message' => "Here is a post message from the server.");
	return Response::json($reply);
});