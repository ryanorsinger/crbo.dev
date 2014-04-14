<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		if (Auth::check()) 
		{
			return View::make('home');
		}	
		else 
		{
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
		{
			// login successful
		    return Redirect::action('HomeController@showHome');
		}
		else
		{
			// login failed, go back to the login view
			return Redirect::back()->withInput(Input::old('username'));
		}
	}

	public function showAdmin()
	{
		if (Auth::user()->role == "admin")
		{
			return View::make('admin');
		}
		else
		{
			return Redirect::action('HomeController@showHome');
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showLogin');
	}

}