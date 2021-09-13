<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AdminController extends Controller
{

	public function admin_dashboard(){
		return view('admin.dashboard');
	}
public function student_dashboard(){
        return view('student.dashboard');
    }

    public function login_dashboard(Request $request){


    	$email=$request->admin_email;
    	$password=md5($request->admin_password);
    	$result = DB::table('admin')->where('admin_email',$email)->where('admin_password',$password)->first();
    	if($result){
    		Session::put('admin_email',$result->admin_email);
    		Session::put('admin_id',$result->admin_id);
			return Redirect::to('/admin_dashboard');
		}
		else{
			Session::put('exception','  Email or password Invaild');
			return Redirect::to('/backend');
		}

    	
    	
    }

    public function logout(){
    	Session::put('admin_name',null);
    	Session::put('admin_id',null);
    	return Redirect::to('/backend');
    }


    //view
    public function viewprofile(){
        $admin_id =Session::get('admin_id');
       $admin_profile=DB::table('admin')
       ->select('*')
       ->where('admin_id',$admin_id)
       ->first();
       $manage_admin=view('admin.admin_view')
       ->with('adminprofile',$admin_profile);
       return view('layout')
       ->with('admin_view',$manage_admin);
        //return view('admin.view');
    }
    //setting
      public function admin_setting(){
        $admin_id=Session::get('admin_id');
         $admin_info = DB::table('admin')
         ->select('*')
         ->where('admin_id',$admin_id)
         ->first();
         $manage_admin = view('admin.setting')
         ->with('category',$admin_info);
         return view('layout')
         ->with('admin_setting', $manage_admin);
    }

//student 
      public function student_login_dashboard(Request $request){


        $email=$request->student_email;
        $password=md5($request->student_password);
        $result = DB::table('student')->where('student_email',$email)->where('student_password',$password)->first();
        if($result){
            Session::put('student_email',$result->student_email);
            Session::put('student_id',$result->student_id);
            return Redirect::to('/student_dashboard');
        }
        else{
            Session::put('exception','  Email or password Invaild');
            return Redirect::to('/');
        }

        
        
    }

    //setting
    public function student_profile(){
       $student_id =Session::get('student_id');
       $student_profile=DB::table('student')
       ->select('*')
       ->where('student_id',$student_id)
       ->first();
       $manage_student=view('student.student_view')
       ->with('studentprofile',$student_profile);
       return view('student_layout')
       ->with('student_view',$manage_student);
    }

    public function student_logout(){
        Session::put('student_name',null);
        Session::put('student_id',null);
        return Redirect::to('/');
    }

    public function student_setting(){
         $student_id=Session::get('student_id');
         $student_info = DB::table('student')
         ->select('*')
         ->where('student_id',$student_id)
         ->first();
         $manage_student = view('student.student_setting')
         ->with('category',$student_info);
         return view('student_layout')
         ->with('student_setting', $manage_student);
    }
public function student_update(Request $request ){


    $student_id=Session::get('student_id');
    $data=array();
  
    $data['student_Phone']=$request->student_Phone;
    $data['student_address']=$request->student_address;
    $data['student_password']=$request->student_password;
 
    DB::table('student')
    ->where('student_id',$student_id)
    ->update($data);
    Session::put('exception',' Finally ! Your Profile Updated  SuccessFully...');
    return Redirect::to('/student_setting');
    
  }




}
