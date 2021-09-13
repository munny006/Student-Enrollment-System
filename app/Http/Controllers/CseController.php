<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CseController extends Controller
{
	public function cse(){

	$csestudent = DB::table('student')
	->where(['student_dept'=>1])
	->get();
	$cse_student = view('admin.cse')
	->with('cse_student',$csestudent);
	return view('layout')->with('student',$cse_student);
	return view('admin.cse');
  }
    
}
