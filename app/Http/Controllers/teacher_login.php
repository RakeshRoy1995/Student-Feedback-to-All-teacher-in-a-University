<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class teacher_login extends Controller
{
    public function show_login(){
    	return view('teacher_login');
    }

    public function login(Request $Request)
    {
    	
    	$uid= $Request ->uid;
        $email= $Request ->email;
    	$password =$Request ->password;
    	$result = DB::table('teachar_tbl')
    	->where('uid',$uid)
    	->where('email',$email)
    	->where('password',$password)
    	->first();
    	
    	if ($result) {
            Session::put('email',$email);
            Session::put('uid',$uid);
    		return Redirect::to('/teacher_info');
    	}
    }

    public function logout()
    {
       Session::put('email',null);
       Session::put('uid',null);

       return Redirect::to('/teacher_login');

    }

}
