@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
	<div class="card">
		<div class="card-body">
			 <p class=" alert-info"><?php
              $exception = Session::get('exception');
              if($exception) {
              	echo $exception;
              	Session::put('exception',null);
      }
?>
</p>
			<h2 class="card-title text-center"> ADD STUDENTS FORM</h2>
			<form class="forms-sample py-2 my-2" action="{{URL::to('/update_student/'.$category->student_id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail1"> Student Name </label>
					<input type="text" class="form-control p-input" name="student_name"  placeholder=" Student student" value="{{$category->student_name}}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Roll </label>
					<input type="text" class="form-control p-input" name="student_roll" placeholder=" Student roll" value="{{$category->student_roll}}">
				</div>

					<div class="form-group">
					<label for="exampleInputPassword1"> Student FatherName </label>
					<input type="text" class="form-control p-input" name="student_fathername" placeholder=" Student fathername" value="{{$category->student_fathername}}">
				</div>
					<div class="form-group">
					<label for="exampleInputPassword1"> Student MotherName </label>
					<input type="text" class="form-control p-input" name="student_mothername" placeholder=" Student mathername" value="{{$category->student_mothername}}">
				</div>

					<div class="form-group">
					<label for="exampleInputPassword1"> Student Email </label>
					<input type="email" class="form-control p-input" name="student_email" placeholder=" Student email" value="{{$category->student_email}}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Phone </label>
					<input type="tel" class="form-control p-input" name="student_Phone" placeholder=" Student Phone" value="{{$category->student_Phone}}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Address </label>
					<input type="text" class="form-control p-input" name="student_address" placeholder=" Student address" value="{{$category->student_address}}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Password </label>
					<input type="Password" class="form-control p-input" name="student_password" placeholder=" Student Password" value="{{$category->student_password}}">
				</div>
				
					<div class="form-group">
					<label for="exampleInputPassword1"> Student Department </label>
					<select class="form-control p-input" name="student_dept" value="{{$category->student_dept}}">
						<option value="1">CSE</option>
						<option value="2">EEE</option>
						<option value="3">ENGLIGH</option>
						<option value="4">BBA</option>
						<option value="5">MBA</option>

					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Addmision Year </label>
					<input type="date" class="form-control p-input" name="student_addmissionyear" placeholder=" Student Addmision Year" value="{{$category->student_addmissionyear}}">
				</div>
		

				
				<button type="submit" class="btn btn-info"> Update </button>
			</form>
		</div>
	</div>
</div>



@endsection