<?php

class UsersTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->username = "admin";
		$user->password = Hash::make('password');
		$user->role = "admin";
		$user->save();

		$user = new User();
		$user->username = "buyback";
		$user->password = Hash::make('password');
		$user->role = "buyback";
		$user->save();

		$user = new User();
		$user->username = "refurb";
		$user->password = Hash::make('password');
		$user->role = "refurb";
		$user->save();

		$user = new User();
		$user->username = "demo";
		$user->password = Hash::make('demo');
		$user->role = "admin";
		$user->save();
	}
}