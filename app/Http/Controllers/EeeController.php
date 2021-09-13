<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EeeController extends Controller
{
     public function eee(){
	
  $eeestudent = DB::table('student')
	->where(['student_dept'=>2])
	->get();
	$eee_student = view('admin.eee')
	->with('eee_student',$eeestudent);
	return view('layout')->with('student',$eee_student);

}

}

