<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(

        	'name' => 'Allan John',
        	'username' => 'allan123',
        	'email' => 'alan@gmail.com',
        	'password' => bcrypt('qwerty1234'), 

        	));
    }
}
