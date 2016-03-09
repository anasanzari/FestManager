<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToEvents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('events', function(Blueprint $table)
		{
			//
			$table->text('venue');
			$table->date('date');
			$table->text('manager');
			$table->text('contact');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('events', function(Blueprint $table)
		{
			//
			$table->dropColumn('venue');
			$table->dropColumn('date');
			$table->dropColumn('manager');
			$table->dropColumn('contact');
		});
	}

}
