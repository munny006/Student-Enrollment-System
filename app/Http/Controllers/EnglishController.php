<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EnglishController extends Controller
{
	 public function english(){
	$englishstudent = DB::table('student')
	->where(['student_dept'=>3])
	->get();
	$english_student = view('admin.english')
	->with('english_student',$englishstudent);
	return view('layout')->with('student',$english_student);
	return view('admin.engish');
  }
}
