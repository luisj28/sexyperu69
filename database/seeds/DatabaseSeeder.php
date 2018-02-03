<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		 DB::table('users')->insert([
			'name' => 'loes',
			'email' => 'new.luis28@gmail.com',
			'password' => bcrypt('12345678'),
		]);
    
		DB::table('users')->insert([
			'name' => 'moises',
			'email' => 'moycs777@gmail.com',
			'password' => bcrypt('12345678'),
		]);

    }
}
