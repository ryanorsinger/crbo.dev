<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHddsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hdds', function($table)
        {
            $table->increments('id')->unsigned();            
            $table->string('form_factor', 25)->nullable();
            $table->string('interface', 25)->nullable();
            $table->string('capacity', 25)->nullable();
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
		Schema::drop('hdds');
	}

}
