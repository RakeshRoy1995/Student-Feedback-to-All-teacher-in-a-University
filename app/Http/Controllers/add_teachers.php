<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response,File;
use DB;
use Validator;
use Redirect;
use View;
use Session;
Session_start();

class add_teachers extends Controller
{
    public function addteachers()
    {
      $login_id = Session::get('admin_email');
      if ($login_id) {
        return view('admin.addteacher');
      }
       
    }

    public function save_teachers(Request $request)
    {
       $login_id = Session::get('admin_email');
       if ($login_id) {
       $data = array();
       $rex = array();
       $data['name']=$request ->name;
       $data['faculty']=$request ->faculty;
       $data['department']=$request ->department;
       $data['email']=$request ->email;
       $data['number']=$request ->number;
       $data['password']=$request ->password;
       $data['shift']=$request ->shift;
       $data['batch']=$request ->batch;
       $data['course_name']=$request ->course_name;
       $data['uid']=$request ->uid;
       $rex['uid'] = $request ->uid;
       $rex['total'] = $request ->total;

       $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPEG,PNG,JPG|max:2048',
            'password' =>'required|min:6'
       ]);

       if ($image=$request->file('image')) {
           $uploadPath = 'image';
           $dbUrl = $uploadPath."/".$image->getClientOriginalName();
           $image->move($uploadPath,$image->getClientOriginalName());

           if ($image) {
            $data['image']= $dbUrl;
            if ($image) {
              DB::table('teachar_tbl')->insert($data);
              DB::table('la_result')->insert($rex); 
            Session::put('message','data Inserted Successfully');
            return Redirect::to('/addteachers');
            }
            
            }
        }
    
    } 
  }

 }
