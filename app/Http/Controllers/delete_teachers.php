<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class delete_teachers extends Controller
{
    public function teacher_delete($id)
    {
       $login_id = Session::get('admin_email');
       if ($login_id) {	
       DB::table('teachar_tbl')
       ->where('id',$id)
       ->delete();

       return Redirect::to('/allteachers');
      }
    }
}
