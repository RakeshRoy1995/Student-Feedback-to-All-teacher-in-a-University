<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class login_student extends Controller
{
    public function login(Request $Request)
    {
    	
    	$Reg_number= $Request ->Reg_number;
        $shift= $Request ->shift;
    	$batch =$Request ->batch;
    	$password =$Request ->password;
    	$result = DB::table('student_tbl')
    	->where('Reg_number',$Reg_number)
    	->where('batch',$batch)
    	->where('password',$password)
    	->first();
    	
    	if ($result) {
            Session::put('shift',$shift);
            Session::put('Reg_number',$Reg_number);
            Session::put('batch',$batch);
    		return Redirect::to('/student_page');
    	}
    }
}
