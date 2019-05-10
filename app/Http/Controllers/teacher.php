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

class teacher extends Controller
{
    public function show()
    {
      
       $login_two = Session::get('uid');
          
       if ($login_two) {
       $allteachers_info=DB::table('teachar_tbl')
       ->where('uid',$login_two)
       ->get();
       return  view('teacher_info')
       ->with('all_teachers_info', $allteachers_info);
       }
       
    }
    public function result_of_preformance_show(Request $request)
    {
       $login_two = Session::get('uid');
       if ($login_two) {
        
       $uid=$request ->uid;
       $shift=$request ->shift;
       $batch=$request ->batch;
       $name=$request ->name;
       Session::put('shift',$shift);
       Session::put('batch',$batch);
       Session::put('name',$name);

        $q_1 = DB::table('feedback')
                ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
                ->avg('q_1');
        $q_2 = DB::table('feedback')
            ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
            ->avg('q_2');
        $q_3 = DB::table('feedback')
            ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
            ->avg('q_3');
        $q_4 = DB::table('feedback')
            ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
            ->avg('q_4'); 
        $q_5 = DB::table('feedback')
                ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
                ->avg('q_5');
        $q_6 = DB::table('feedback')
            ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
            ->avg('q_6');
        $q_7 = DB::table('feedback')
            ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
            ->avg('q_7');
        $q_8 = DB::table('feedback')
            ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
            ->avg('q_8');
        $q_9 = DB::table('feedback')
            ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
            ->avg('q_9');
        $q_10 = DB::table('feedback')
            ->where('uid', $uid)
                ->where('shift', $shift)
                ->where('batch', $batch)
            ->avg('q_10');
            //orWhere
        $q_1p = ($q_1/5) *100;
        $q_2p = ($q_2/5) *100;
        $q_3p = ($q_3/5) *100;
        $q_4p = ($q_4/5) *100;
        $q_5p = ($q_5/5) *100;
        $q_6p = ($q_6/5) *100;
        $q_7p = ($q_7/5) *100;
        $q_8p = ($q_8/5) *100;
        $q_9p = ($q_9/5) *100;
        $q_10p = ($q_10/5) *100; 
        $total = ($q_1p+$q_2p+$q_3p+$q_4p+$q_5p+$q_6p+$q_7p+$q_8p+$q_9p+$q_10p)/10;
        
        Session::put('total',$total);
        Session::put('q_2p',$q_2p);
        Session::put('q_1p',$q_1p);
        Session::put('q_3p',$q_3p);
        Session::put('q_4p',$q_4p);
        Session::put('q_5p',$q_5p);
        Session::put('q_6p',$q_6p);
        Session::put('q_7p',$q_7p);
        Session::put('q_8p',$q_8p);
        Session::put('q_9p',$q_9p);
        Session::put('q_10p',$q_10p);
        // var_dump($q_1) or die();

       $allteachers_info=DB::table('ques')->get();
       return  view('performance')
       ->with('all_teachers_info', $allteachers_info);

    
       }
    }

    public function detail($id){
    
    $login_two = Session::get('uid');
       if ($login_two) {
    $names = DB::table('feedback')
                ->where('uid', $id)
                ->first();
    $name= json_decode( json_encode($names), true);
                // var_dump($name) or die();

    $q_1 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_1');
    $q_2 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_2');
    $q_3 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_3');
    $q_4 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_4'); 
    $q_5 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_5');
    $q_6 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_6');
    $q_7 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_7');
    $q_8 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_8');
    $q_9 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_9');
    $q_10 = DB::table('feedback')
                ->where('uid', $id)
                ->avg('q_10');

    $q_1p = ($q_1/5) *100;
    $q_2p = ($q_2/5) *100;
    $q_3p = ($q_3/5) *100;
    $q_4p = ($q_4/5) *100;
    $q_5p = ($q_5/5) *100;
    $q_6p = ($q_6/5) *100;
    $q_7p = ($q_7/5) *100;
    $q_8p = ($q_8/5) *100;
    $q_9p = ($q_9/5) *100;
    $q_10p = ($q_10/5) *100; 
    $total = ($q_1p+$q_2p+$q_3p+$q_4p+$q_5p+$q_6p+$q_7p+$q_8p+$q_9p+$q_10p)/10;
        
        Session::put('total',$total);
        Session::put('name',$name);       
        Session::put('q_2p',$q_2p);
        Session::put('q_1p',$q_1p);
        Session::put('q_3p',$q_3p);
        Session::put('q_4p',$q_4p);
        Session::put('q_5p',$q_5p);
        Session::put('q_6p',$q_6p);
        Session::put('q_7p',$q_7p);
        Session::put('q_8p',$q_8p);
        Session::put('q_9p',$q_9p);
        Session::put('q_10p',$q_10p);
        
        
       $allteachers_info=DB::table('ques')->get();
       return  view('performance_teacher')
       ->with('all_teachers_info', $allteachers_info);
      }
    }

    public function edit_teachers($id)
    {
       $login_two = Session::get('uid');
       if ($login_two) {
       $allteachers_info=DB::table('teachar_tbl')
       ->select('*')
       ->where('id',$id)
       ->first();

       return  view('edit_teacher')
       ->with('all_teachers_info', $allteachers_info);
     }

    }

    public function update_teachers(Request $request, $id)
    {
       $login_two = Session::get('uid');
       if ($login_two) {
       $data = array();
       $data['name']=$request ->name;
       $data['faculty']=$request ->faculty;
       $data['department']=$request ->department;
       $data['email']=$request ->email;
       $data['password']=$request ->password;
       $data['shift']=$request ->shift;
       $data['batch']=$request ->batch;
       // $image=$_FILES['image'];
       $image=$request->file('image');
       $uploadPath = 'image';
       $dbUrl = $uploadPath."/".$image->getClientOriginalName();
       // $path = Storage::putFile('public/img', $request->file('image'));
       $image->move($uploadPath,$image->getClientOriginalName());

       if ($image) {
      $data['image']= $dbUrl;
      if ($image) {
        
        DB::table('teachar_tbl')
        ->where('id',$id)
        ->update($data);
        
      return Redirect::to('/teacher_info');
      }
      
      }
    }

    }

}
