<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cpu', function($table)
        {
            $table->increments('id');            
            $table->string('make', 50);
            $table->string('model', 50);
            $table->string('number_of_cores', 10);
            $table->string('speed', 10);
            $table->integer('price');
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
		Schema::drop('cpu');
	}

}
