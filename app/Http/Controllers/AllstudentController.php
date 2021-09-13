<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AllstudentController extends Controller
{
	public function allstudent(){

	$allstudent = DB::table('student')
	->get();
	$student_info = view('admin.allstudent')
	->with('category',$allstudent);
	return view('layout')->with('student',$student_info);

	
	//return view('admin.allstudent');
  }


  public function student_delete($student_id){
  	DB::table('student')->where('student_id',$student_id)->delete();

  	Session::put('exception',' Finally ! Data Deleted SuccessFully...');
  	return Redirect::to('/allstudent');

  }

  public function studentview($student_id){

  	$student_view = DB::table('student')
  	->Select('*')
  	->where('student_id',$student_id)
  	->first();
  	$student_des = view('admin.view')
  	->with('category',$student_view);
  	return view('layout')->with('view',$student_des);


  	//return view('admin.view');

  }


  public function student_edit($student_id){
  	$student_view = DB::table('student')
  	->Select('*')
  	->where('student_id',$student_id)
  	->first();
  	$student_des = view('admin.student_edit')
  	->with('category',$student_view);
  	return view('layout')->with('student_edit',$student_des);
  }

  public function update_student(Request $request,$student_id){
  	$data=array();
  	$data['student_name']=$request->student_name;
  	$data['student_roll']=$request->student_roll;
  	$data['student_fathername']=$request->student_fathername;
  	$data['student_mothername']=$request->student_mothername;
  	$data['student_email']=$request->student_email;
  	$data['student_Phone']=$request->student_Phone;
  	$data['student_address']=$request->student_address;
  	$data['student_password']=$request->student_password;
  	$data['student_dept']=$request->student_dept;
  	$data['student_addmissionyear']=$request->student_addmissionyear;
  	DB::table('student')
  	->where('student_id',$student_id)
  	->update($data);
  	Session::put('exception',' Finally ! Data Updated  SuccessFully...');
  	return Redirect::to('/allstudent');
  	
  }


}
