<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Redirect;
use View;
use Session;

class students extends Controller
{
	//delete student

    public function studnt_del($id)
    {
       $login_id = Session::get('admin_email');
       if ($login_id) {
       DB::table('student_tbl')
       ->where('id',$id)
       ->delete();

       return Redirect::to('/allstudents');
     }

    }


    public function day_batch(){
      $login_id = Session::get('admin_email');
      if ($login_id) {
    	return view('admin.add_student');
      }
    }

    //View All students

    public function day_batch_all_students()
    {
       $login_id = Session::get('admin_email');
       if ($login_id) {
       $allstudents_info=DB::table('student_tbl')
       ->orderBy('id', 'dsec')
       ->paginate(15);
       return  view('admin.allstudents')
       ->with('all_students_info', $allstudents_info);
     }

    }

    //Add students

    public function save_students_day(Request $request)
    {
       $login_id = Session::get('admin_email');
       if ($login_id) {
       $data = array();
       $data['name']=$request ->name;
       $data['faculty']=$request ->faculty;
       $data['department']=$request ->department;
       $data['roll']=$request ->roll;
       $data['shift']=$request ->shift;
       $data['batch']=$request ->batch;
       $data['Reg_number']=$request ->Reg_number;
       $data['password']=$request ->password;
        // var_dump($image) or die();
     
      DB::table('student_tbl')->insert($data);
        
      Session::put('message','data Inserted Successfully');
      return Redirect::to('/addstudents_day');
      }
      
    }

    //Edit students

    public function edit_students($id)
    {
       $login_id = Session::get('admin_email');
      if ($login_id) {
       $allteachers_info=DB::table('student_tbl')
       ->select('*')
       ->where('id',$id)
       ->first();
       // var_dump($allteachers_info) or die();

       return  view('admin.edit_student')
       ->with('all_students_info', $allteachers_info);
      }

    }


    public function update_student(Request $request, $id)
    {
       $login_id = Session::get('admin_email');
      if ($login_id) {
       $data = array();
       $data['name']=$request ->name;
       $data['faculty']=$request ->faculty;
       $data['department']=$request ->department;
       $data['roll']=$request ->roll;
       $data['batch']=$request ->batch;
       $data['Reg_number']=$request ->Reg_number;
        
        DB::table('student_tbl')
        ->where('id',$id)
        ->update($data);
        
      Session::put('updated_message','data updated Successfully');
      return Redirect::to('/allstudents');
        }
      }

      public function Search(Request $Request)
    {

        $query= $Request ->search;
        $all_search_info = DB::table('student_tbl')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('faculty', 'like', '%'.$query.'%')
         ->orWhere('department', 'like', '%'.$query.'%')
         ->orWhere('Reg_number', 'like', '%'.$query.'%')
         ->orWhere('shift', 'like', '%'.$query.'%')
         ->paginate(10000000);
    

         return  view('admin.allstudents')
            ->with('all_search_info', $all_search_info);
         
    }
  	
}
