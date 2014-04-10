<?php

class UserTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->username = "admin";
		$user->password = Hash::make('password');
		$user->save();

		$user = new User();
		$user->username = "tech";
		$user->password = Hash::make('password');
		$user->save();
	}
}