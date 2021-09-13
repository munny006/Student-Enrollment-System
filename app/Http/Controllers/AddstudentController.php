<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\ImageUploadControlller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddstudentController extends Controller
{
    public function addstudent(){
    	return view('admin.addstudent');
    }
    public function save_student(Request $request){
    	$data = array();
    	$data['student_name']=$request->student_name;
    	$data['student_roll']=$request->student_roll;
    	$data['student_fathername']=$request->student_fathername;
    	$data['student_mothername']=$request->student_mothername;
    	$data['student_email']=$request->student_email;
    	$data['student_phone']=$request->student_phone;
    	$data['student_address']=$request->student_address;
    	$data['student_password']=md5($request->student_password);
    	$data['student_dept']=$request->student_dept;
    	$data['student_addmissionyear']=$request->student_addmissionyear;

    	$images=$request->file('student_img');
    	if ($images) {
    		$images_name =str::random(5);
    		$ext=strtolower($images->getClientOriginalExtension());
    		$images_full_name=$images_name.'.'.$ext;
    		$upload_path='public/images/';
    		$images_url =$upload_path.$images_full_name;
    		$success= $images->move($upload_path,$images_full_name);
    		if ($success) {
    			$data['student_img']=$images_url;
    			DB::table('student')->insert($data);
    			Session::put('exception',' StUdent inserted SuccessFully...');
    			return Redirect::to('addstudent');
    		}

    	}

    	$data['student_img']=$images_url;
    	DB::table('student')->insert($data);
    			Session::put('exception',' StUdent inserted SuccessFully...');
    			return Redirect::to('addstudent');

    			DB::table('student')->insert($data);
    			Session::put('exception',' StUdent inserted SuccessFully...');
    			return Redirect::to('addstudent');


    	
    }
}
