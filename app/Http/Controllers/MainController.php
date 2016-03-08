<?php

namespace App\Http\Controllers;

use App\User;
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

}
