<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHddTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hdd', function($table)
        {
            $table->increments('id');            
            $table->string('form_factor', 25);
            $table->string('interface', 25);
            $table->string('capacity', 25);
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
		Schema::drop('hdd');
	}

}
