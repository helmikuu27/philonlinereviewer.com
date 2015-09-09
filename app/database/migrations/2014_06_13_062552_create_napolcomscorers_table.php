<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNapolcomscorersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('napolcomscorers', function(Blueprint $table)
		{
			$table->increments('id');			
			$table->string('name', 255);
			$table->string('score', 255);			
			$table->string('school', 255);
			$table->string('address', 255);
			$table->string('photo', 255);

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
		Schema::drop('napolcomscorers');
	}

} 