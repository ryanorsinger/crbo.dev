<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('HddsTableSeeder');
		$this->call('RamsTableSeeder');
		$this->call('CpusTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('DevicesTableSeeder');
		$this->call('ManufacturersTableSeeder');

	}

}