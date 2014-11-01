<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
				'first_name' => 'Jyri',
				'last_name' => 'Saukkonen',
				'email' => 'jyri@test.fi',
				'password' => Hash::make('test'),
				'admin' => true
			));
	}

}