<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array(
            array(
                'firstname' => 'admin guy',
                'lastname'  => 'yup',
                'password'  => Hash::make('welcome'),
                'email'     => 'admin@example.com',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
