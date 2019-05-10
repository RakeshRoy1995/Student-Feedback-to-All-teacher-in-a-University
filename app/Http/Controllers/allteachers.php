<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
Session_start();

class allteachers extends Controller
{
     public function allteachers()
    {
      $login_id = Session::get('admin_email');
      if ($login_id) {
       $allteachers_info=DB::table('teachar_tbl')
       ->orderBy('batch', 'dsec')
       ->orderBy('name', 'dsec')
       ->orderBy('shift', 'dsec')
       ->paginate(10);
       return  view('admin.allteacher')
       ->with('all_teachers_info', $allteachers_info);
     }  

    }

    public function Search(Request $Request)
    {

        $query= $Request ->search;
        $all_search_info = DB::table('teachar_tbl')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('faculty', 'like', '%'.$query.'%')
         ->orWhere('department', 'like', '%'.$query.'%')
         ->orWhere('uid', 'like', '%'.$query.'%')
         ->orderBy('batch', 'dsec')
         ->orderBy('name', 'dsec')
         ->orderBy('shift', 'dsec')
         ->paginate(100000000);
    

         return  view('admin.allteacher')
            ->with('all_search_info', $all_search_info);
         
    }
}
