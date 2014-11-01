<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTasks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_tasks', function(Blueprint $table)
		{
			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')
				->on('projects');

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
		Schema::drop('project_tasks');
	}

}
