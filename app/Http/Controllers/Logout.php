<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

class Logout extends Controller
{
    public function student()
    {
    	Session::put('Reg_number',null);
    	Session::put('batch',null);
    	Session::put('shift',null);
       return Redirect::to('/');
    }
    public function Senior_teacher()
    {
    	Session::put('email',null);
    	Session::put('uid',null);
       return Redirect::to('/');
    }
}
