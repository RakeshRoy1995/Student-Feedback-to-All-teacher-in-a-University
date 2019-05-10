<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class result extends Controller
{
	public function login_senior(Request $Request)
    {
    	$uid= $Request ->uid;
        $email= $Request ->email;
    	$password =$Request ->password;
    	$result = DB::table('teachar_tbl')
    	->where('uid',$uid)
    	->where('email',$email)
    	->where('password',$password)
    	->first();
    	
    	if ($result) {
            Session::put('email',$email);
            Session::put('uid',$uid);
    		return Redirect::to('/result_info');
    	}
    }

    public function index(){
        $email = Session::get('email');
        $uid = Session::get('uid');
       if ($email && $uid) {
        $result = DB::table('la_result')
            ->join('feedback', 'la_result.uid', '=', 'feedback.uid')
            ->join('teachar_tbl', 'la_result.uid', '=', 'teachar_tbl.uid')
            ->select('la_result.*', 'feedback.name', 'feedback.uid', 'feedback.department', 'feedback.faculty', 'teachar_tbl.image', 'la_result.total')
            ->distinct('uid')
            ->orderBy('la_result.total', 'dsec')
            ->get();
            // var_dump($result) or die();
            
            return  view('result.all_teacher_feedback')
            ->with('all_teachers_info', $result);
        }
    }

    public function detail($id){
        $email = Session::get('email');
        $uid = Session::get('uid');
       if ($email && $uid) {
    
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
       return  view('result.get_performance')
       ->with('all_teachers_info', $allteachers_info);

       // return  view('result.get_performance')
       // ->with('nam', $name);
       }
    }

    public function Search(Request $Request)
    {
        $email = Session::get('email');
        $uid = Session::get('uid');
       if ($email && $uid) {

        $query= $Request ->search;
        $all_search_info = DB::table('teachar_tbl')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('faculty', 'like', '%'.$query.'%')
         ->orWhere('department', 'like', '%'.$query.'%')
         ->orWhere('uid', 'like', '%'.$query.'%')
         ->paginate(100000000);
    

         return  view('result.all_teacher_feedback')
            ->with('all_search_info', $all_search_info);
        }
    }
}
