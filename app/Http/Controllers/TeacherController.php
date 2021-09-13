<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\ImageUploadControlller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class TeacherController extends Controller
{
     public function allteacher(){
	return view('admin.allteacher');
  }
    public function addteacher(){
	return view('admin.add_teacher');
  }

  public function save_teacher(Request $request){
    	$data = array();
    	$data['teacher_name']=$request->teacher_name;
    	$data['teacher_phone']=$request->teacher_phone;
    	$data['teacher_address']=$request->teacher_address;
    	$data['teacher_dept']=$request->teacher_dept;
    	

    	$images=$request->file('teacher_img');
    	if ($images) {
    		$images_name =str::random(5);
    		$ext=strtolower($images->getClientOriginalExtension());
    		$images_full_name=$images_name.'.'.$ext;
    		$upload_path='public/images/';
    		$images_url =$upload_path.$images_full_name;
    		$success= $images->move($upload_path,$images_full_name);
    		if ($success) {
    			$data['teacher_img']=$images_url;
    			DB::table('teacher')->insert($data);
    			Session::put('exception',' Teacher inserted SuccessFully...');
    			return Redirect::to('addteacher');
    		}

    	}

    	$data['teacher_img']=$images_url;
    	DB::table('teacher')->insert($data);
    			Session::put('exception',' Teacher inserted SuccessFully...');
    			return Redirect::to('addstudent');

    			DB::table('student')->insert($data);
    			Session::put('exception',' Teacher inserted SuccessFully...');
    			return Redirect::to('addteacher');


    	
    }
    
  

}



