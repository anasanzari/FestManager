<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('register', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userid')->unsigned();
			$table->integer('eventid')->unsigned();
			$table->timestamps();
			$table->foreign('eventid')->references('id')->on('events')->onDelete('cascade');
			$table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('register');
	}

}
