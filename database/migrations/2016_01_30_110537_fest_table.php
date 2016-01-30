<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fests', function(Blueprint $table){
			$table->increments('id');
			$table->string('name',50);
			$table->date('fromDate');
			$table->date('toDate');
			$table->string('department',50);
			$table->string('imgUrl',100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fests');
	}

}
