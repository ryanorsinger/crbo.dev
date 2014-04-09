<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceHasManufacturerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('device_has_manufacturer', function($table) {

			$table->integer('device_id')->unsigned();
			$table->foreign('device_id')->references('id')->on('devices');
			$table->integer('manufacturer_id')->unsigned();
			$table->foreign('manufacturer_id')->references('id')->on('manufacturer');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('device_has_manufacturer');
	}

}
