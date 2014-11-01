<?php

class ProjectTableSeeder extends Seeder {



	public function run()
	{

		foreach(range(1, 10) as $index)
		{
			Project::create([
				'name' => 'PROJECT-'.$index,
				'description' => 'THIS IS A TEST PROJECT-'.$index,
				'deadline' => \Carbon\Carbon::now(),
			]);
		}
	}

}