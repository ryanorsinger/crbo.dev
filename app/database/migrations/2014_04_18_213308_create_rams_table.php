<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rams', function($table)
        {
            $table->increments('id')->unsigned();            
            $table->string('type', 40)->nullable();
            $table->string('speed', 25)->nullable();
            $table->string('size', 25)->nullable();
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
		Schema::drop('rams');
	}

}
