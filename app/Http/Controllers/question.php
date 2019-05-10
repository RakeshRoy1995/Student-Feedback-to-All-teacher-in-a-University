<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class question extends Controller
{
    public function show()
    {
      $login_id = Session::get('admin_email');
      if ($login_id) {
      return  view('admin.question');
     }

    }
    public function add(Request $request)
    {
       
       $login_id = Session::get('admin_email');
      if ($login_id) {
       $data = array();
       $data['ques_1']=$request ->ques_1;
       $data['ques_2']=$request ->ques_2;
       $data['ques_3']=$request ->ques_3;
       $data['ques_4']=$request ->ques_4;
       $data['ques_5']=$request ->ques_5;
       $data['ques_6']=$request ->ques_6;
       $data['ques_7']=$request ->ques_7;
       $data['ques_8']=$request ->ques_8;
       $data['ques_9']=$request ->ques_9;
       $data['ques_10']=$request ->ques_10;
        // var_dump($data) or die();
     
      DB::table('ques')->insert($data);
        
      Session::put('message','Question Inserted Successfully');
      return Redirect::to('/question');
      }

    }

    public function allquestion()
    {
       $login_id = Session::get('admin_email');
      if ($login_id) {
       $allteachers_info=DB::table('ques')->get();
       return  view('admin.allquestion')
       ->with('all_teachers_info', $allteachers_info);
     }

    }

    public function edit_question($id)
    {
       $login_id = Session::get('admin_email');
       if ($login_id) {
       $allteachers_info=DB::table('ques')
       ->select('*')
       ->where('id',$id)
       ->first();
       // var_dump($allteachers_info) or die();

       return  view('admin.edit_question')
       ->with('all_students_info', $allteachers_info);
     }

    }

    public function update_question(Request $request, $id)
    {
       $login_id = Session::get('admin_email');
       if ($login_id) {
       $data = array();
       $data['ques_1']=$request ->ques_1;
       $data['ques_2']=$request ->ques_2;
       $data['ques_3']=$request ->ques_3;
       $data['ques_4']=$request ->ques_4;
       $data['ques_5']=$request ->ques_5;
       $data['ques_6']=$request ->ques_6;
       $data['ques_7']=$request ->ques_7;
       $data['ques_8']=$request ->ques_8;
       $data['ques_9']=$request ->ques_9;
       $data['ques_10']=$request ->ques_10;
       

        DB::table('ques')
        ->where('id',$id)
        ->update($data);
        
      Session::put('updated_message','data updated Successfully');
      return Redirect::to('/allquestion');
      }

    }

    public function question_delete($id)
    {
       $login_id = Session::get('admin_email');
      if ($login_id) {
       DB::table('ques')
       ->where('id',$id)
       ->delete();

       return Redirect::to('/allquestion');
     }

    }
}
