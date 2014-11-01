<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserProjectsForeignsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		Schema::table('user_projects', function(Blueprint $table)
		{
			$table->foreign('user_id')->references('id')
				->on('users');
			$table->foreign('project_id')->references('id')
				->on('projects');
		});*/
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_projects_foreigns');
	}

}
