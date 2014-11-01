<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::create('project_users', function(Blueprint $table)
		{
			$table->integer('project_id')->unsigned();

			$table->integer('user_id')->unsigned();
		});*/

		Schema::table('project_users', function(Blueprint $table){
			$table->foreign('project_id')->references('id')
				->on('projects');
			$table->foreign('user_id')->references('id')
				->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_users');
	}

}
