<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskProgressByUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_task_progress', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('progress');
			$table->timestamps();
		});

		Schema::table('user_task_progress', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')
				->on('users');

			$table->integer('task_id')->unsigned();
			$table->foreign('task_id')->references('id')
				->on('tasks');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_task_progress');
	}

}
