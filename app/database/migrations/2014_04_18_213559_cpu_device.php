<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CpuDevice extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cpu_device', function($table) {

			$table->integer('cpu_id')->unsigned();
			$table->foreign('cpu_id')->references('id')->on('cpus');
			$table->integer('device_id')->unsigned();
			$table->foreign('device_id')->references('id')->on('devices');

		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cpu_device');
	}

}
