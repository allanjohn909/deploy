<?php
use App\Server;
use Illuminate\Database\Seeder;

class ServerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('servers')->delete();
        Server::create(array(
        	'sname' => 'first_server',
        	'ip' => '192.168.1.23',
        	'pork' => '0',
        	'password' => 'kello1234',


        	));
    }
}
