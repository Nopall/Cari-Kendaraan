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
        		'id' => '1',
            'name' => 'Administrator',
        		'username' => 'admin',
            'password' => Hash::make('admin'),
        	]);
    }
}
