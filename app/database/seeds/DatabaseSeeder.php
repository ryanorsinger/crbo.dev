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

		$this->call('HddTableSeeder.php');
		$this->call('RamTableSeeder.php');
		$this->call('CpuTableSeeder.php');
		$this->call('UsersTableSeeder');
		$this->call('DevicesTableSeeder');
		$this->call('ManufacturersTableSeeder');

	}

}