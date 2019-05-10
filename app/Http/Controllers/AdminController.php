<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AdminController extends Controller
{
    public function admin_dashboard()
    {
      $login_id = Session::get('admin_email');
      if ($login_id) {
       return view('admin.dashboard');
      }
    }

    public function login_dashboard(Request $Request)
    {
    	
    	$admin_email= $Request ->admin_email;
    	$admin_password =$Request ->admin_password;
    	$result = DB::table('admin')
    	->where('admin_email',$admin_email)
    	->where('admin_password',$admin_password)
    	->first();
    	if ($result) {
            Session::put('admin_email',$admin_email);
            Session::put('admin_password',$admin_password);
    		return Redirect::to('/admin_dashborad');
    	} else {
            Session::put('exception','Email or Password Invalied');
    		return Redirect::to('/backend');
    	}



    }


    public function logout()
    {
       Session::put('admin_email',null);
       return Redirect::to('/backend');

    }
}
