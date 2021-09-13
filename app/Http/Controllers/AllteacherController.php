<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AllteacherController extends Controller
{
      public function allteacher(){

	$allteacher = DB::table('teacher')
	->get();
	$teacher_info = view('admin.allteacher')
	->with('category',$allteacher);
	return view('layout')->with('teacher',$teacher_info);
}

}
