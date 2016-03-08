<?php

namespace App\Http\Controllers;

use App\User;
use App\Server;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Auth;
use App\Http\Requests;

class MainController extends Controller
{
    //
    public function postLogin(Request $request)
    {
    // 	$user = $request->username;
    	// $pass = $request->password;
     //    $pass1 = bcrypt($pass);
     //    $hashedPassword = \DB::table('users')->where('username','allan123')->value('password');
        $credentials=[
            'username' => $request->username,
            'password' => $request->password
        ];

    	if(Auth::attempt($credentials)) {
    		return view('start');
    	}else{
    		return "Wrong Credentials";
            
    	}
    }

    public function dblist()
    {
        $servers = DB::table('servers')->get();
        return view('start', ['servers' => $servers]);
    }

}
