<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Session;
use Redirect;
Session_start();

class feedback extends Controller
{
	public function feedback_start(){
    $Reg_number = Session::get('Reg_number');
    $batch = Session::get('batch');
    $shift = Session::get('shift');
    if ($Reg_number && $batch && $shift) {
    $teachers_feedback_info=DB::table('teachar_tbl')
    ->where('batch',$batch)
    ->where('shift',$shift)
    ->get();
    
       return  view('student_page')
       ->with('feedback_teachers_info', $teachers_feedback_info);
     }
    }

    public function save_feedback(Request $request)
    {
       $Reg_number = Session::get('Reg_number');
       if ($Reg_number) {
       $data = array();
       $result = array();
       $data['name']=$request ->name;
       $data['faculty']=$request ->faculty;
       $data['department']=$request ->department;
       $data['shift']=$request ->shift;
       $data['batch']=$request ->batch;
       $data['subject']=$request ->subject;
       $data['subject']=$request ->subject;
       $data['semester']=$request ->semester;
       $data['uid']=$request ->uid;
       $data['q_1']=$request ->q_1;
       $data['q_2']=$request ->q_2;
       $data['q_3']=$request ->q_3;
       $data['q_4']=$request ->q_4;
       $data['q_5']=$request ->q_5;
       $data['q_6']=$request ->q_6;
       $data['q_7']=$request ->q_7;
       $data['q_8']=$request ->q_8;
       $data['q_9']=$request ->q_9;
       $data['q_10']=$request ->q_10;
       $la_result['uid']=$request ->uid;
       

       $total_one = $data['q_1'] +$data['q_2'] +$data['q_3'] +$data['q_4'] + $data['q_5'] +$data['q_6'] + $data['q_7'] +$data['q_8'] + $data['q_9'] +$data['q_10'];
       $results['la_total'] =($total_one/50)*100;
       
       $results['la_uid']=$request ->uid;
       DB::table('result')
        ->insert($results);


       $total_two=DB::table('result')
       ->select('*')
       ->where('la_uid',$data['uid'])
       ->avg('la_total');

       $la_result['total'] = $total_two;
       DB::table('la_result')
        ->where('uid',$la_result['uid'])
        ->update($la_result); 

      DB::table('feedback')->insert($data);       
      Session::put('feedback','feedback Successfully');
       return Redirect::to('/student_page');

      }
    }
      

    public function teacher_info($id)
    {
        $Reg_number = Session::get('Reg_number');
        $batch = Session::get('batch');
        $shift = Session::get('shift');
        if ($Reg_number && $batch && $shift) {
       $allteachers_info=DB::table('teachar_tbl')
       ->select('*')
       ->where('uid',$id)
       ->first();
       // var_dump($allteachers_info) or die();

       return  view('feedback')
       ->with('all_teachers_info', $allteachers_info);
      }
    }

    public function edit(Request $Request)
    {
       $Reg_number = Session::get('Reg_number');
       if ($Reg_number) {
       $reg_id=$Request ->Reg_number;

       $info=DB::table('student_tbl')
       ->select('*')
       ->where('Reg_number',$reg_id)
       ->first();

       return  view('edition_student')
       ->with('all_students_info', $info);
     }
    }

    public function update_student(Request $request, $id)
    {
       $Reg_number = Session::get('Reg_number');
       if ($Reg_number) {
       $data = array();
       $data['roll']=$request ->roll;
       $data['batch']=$request ->batch;
       $data['password']=$request ->password;
        
        DB::table('student_tbl')
        ->where('id',$id)
        ->update($data);
        
      Session::put('updated_message','data updated Successfully');
      return Redirect::to('/student_page');
        }
      }
}
