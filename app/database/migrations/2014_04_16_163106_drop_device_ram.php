<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropDeviceRam extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
		Schema::drop('device_ram');

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('device_ram', function($table) {

			$table->integer('device_id')->unsigned();
			$table->foreign('device_id')->references('id')->on('devices');
			$table->integer('ram_id')->unsigned();
			$table->foreign('ram_id')->references('id')->on('rams');

		});
	}

}
