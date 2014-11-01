<?php

class UserProjectsTableSeeder extends Seeder {

	public function run()
	{

		foreach(range(1, 10) as $index)
		{
			UserProject::create([
				'user_id' => 1,
				'project_id' => 1
			]);
		}
	}

}