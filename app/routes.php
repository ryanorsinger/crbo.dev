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

Route::get('/', 'HomeController@showLogin');

Route::post('/', 'HomeController@doLogin');

Route::get('/login', 'HomeController@showLogin');

Route::resource('/devices', 'DevicesController');

Route::resource('/rams', 'RamsController');

Route::resource('/hdds', 'HddsController');

Route::resource('/cpus', 'CpusController');

Route::resource('/manufacturers', 'ManufacturersController');

Route::resource('/users', 'UsersController');

Route::get('/home', 'HomeController@showHome');

Route::get('/logout', 'HomeController@logout');

Route::get('/admin', 'HomeController@showAdmin');

// Route::get('ajax/get', function()
// {
// 	Log::info("Received get.");
// 	Log::info(Input::all());

// 	$reply = array('error' => fasle, 'message' => "Here is a message from the server.");
// 	return Response::json($reply);

// });

// Route::post('ajax/post', function()
// {
// 	Log::info("received post.");
// 	Log::info(Input::all());

// 	$reply = array('error' => false, 'message' => "Here is a post message from the server.");
// 	return Response::json($reply);
// });