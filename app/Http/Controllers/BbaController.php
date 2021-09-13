<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BbaController extends Controller
{
    public function bba(){
	$bbastudent = DB::table('student')
	->where(['student_dept'=>4])
	->get();
	$bba_student = view('admin.bba')
	->with('bba_student',$bbastudent);
	return view('layout')->with('student',$bba_student);
	return view('admin.bba');
  }
}
