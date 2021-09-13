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
			<form class="forms-sample py-2 my-2" action="{{URL::to('/save_student')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail1"> Student Name </label>
					<input type="text" class="form-control p-input" name="student_name"  placeholder=" Student name">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Roll </label>
					<input type="text" class="form-control p-input" name="student_roll" placeholder=" Student roll">
				</div>

					<div class="form-group">
					<label for="exampleInputPassword1"> Student FatherName </label>
					<input type="text" class="form-control p-input" name="student_fathername" placeholder=" Student fathername">
				</div>
					<div class="form-group">
					<label for="exampleInputPassword1"> Student MotherName </label>
					<input type="text" class="form-control p-input" name="student_mothername" placeholder=" Student mathername">
				</div>

					<div class="form-group">
					<label for="exampleInputPassword1"> Student Email </label>
					<input type="email" class="form-control p-input" name="student_email" placeholder=" Student email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Phone </label>
					<input type="tel" class="form-control p-input" name="student_phone" placeholder=" Student Phone">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Address </label>
					<input type="text" class="form-control p-input" name="student_address" placeholder=" Student address">
				</div>
				
				<div class="form-group">
					<label>Upload file</label>
					
							
							<input type="file" name="student_img">
					
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Password </label>
					<input type="Password" class="form-control p-input" name="student_password" placeholder=" Student Password">
				</div>
				
					<div class="form-group">
					<label for="exampleInputPassword1"> Student Department </label>
					<select class="form-control p-input" name="student_dept">
						<option value="1">CSE</option>
						<option value="2">EEE</option>
						<option value="3">ENGLIGH</option>
						<option value="4">BBA</option>
						<option value="5">MBA</option>

					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Addmision Year </label>
					<input type="date" class="form-control p-input" name="student_addmissionyear" placeholder=" Student Addmision Year">
				</div>
		

				
				<button type="submit" class="btn btn-success"> Add Student </button>
			</form>
		</div>
	</div>
</div>



@endsection