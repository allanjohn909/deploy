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
    	Eloquent::unguard();
        // $this->call(UserTableSeeder::class);
        $this->call('UserTableSeeder');
<<<<<<< HEAD
        $this->call('ServerTableSeeder');
=======
>>>>>>> 63feba90a73bcbb8b07940cb900cc72dadeea6e7
    }
}
