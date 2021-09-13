<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MbaController extends Controller
{
 public function mba(){
	$mbastudent = DB::table('student')
	->where(['student_dept'=>5])
	->get();
	$mba_student = view('admin.mba')
	->with('mba_student',$mbastudent);
	return view('layout')->with('student',$mba_student);
	return view('admin.mba');
  }
}
