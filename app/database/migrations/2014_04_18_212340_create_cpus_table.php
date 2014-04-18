<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cpus', function($table)
        {
            $table->increments('id');            
            $table->string('make', 50)->nullable();
            $table->string('model', 50)->nullable();
            $table->string('number_of_cores', 10)->nullable();
            $table->string('speed', 10)->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cpus');
	}

}
