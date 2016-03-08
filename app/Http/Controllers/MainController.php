<?php

namespace App\Http\Controllers;

use App\User;
<<<<<<< HEAD
use App\Server;
=======
>>>>>>> 63feba90a73bcbb8b07940cb900cc72dadeea6e7
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
<<<<<<< HEAD
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

=======
    	$user = $request->username;
    	$pass = $request->password;
    	echo $user; 
    	echo $pass;die();
    	if(Auth::attempt(['username' => $user, 'password' => $pass])) {
    		return "success";
    	}else{
    		return "Wrong Credentials";
    	}
    }

>>>>>>> 63feba90a73bcbb8b07940cb900cc72dadeea6e7
}
