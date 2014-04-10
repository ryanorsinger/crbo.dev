<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceHasMemoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('device_has_memory', function($table) {

			$table->integer('device_id')->unsigned();
			$table->foreign('device_id')->references('id')->on('devices');
			$table->integer('memory_id')->unsigned();
			$table->foreign('memory_id')->references('id')->on('ram');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('device_has_memory');
	}

}
