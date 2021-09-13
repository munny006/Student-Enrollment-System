@extends('student_layout')
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
			<h2 class="card-title text-center"> Update Your Profile</h2>
			<form class="forms-sample py-2 my-2" action="{{URL::to('/student_update')}}" method="POST" enctype="multipart/form-data">
				@csrf
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
					<input type="Password" class="form-control p-input" name="student_password" placeholder=" Student Password" value="{{$category->student_password}">
				</div>
				<button type="submit" class="btn btn-info"> Update </button>
			</form>
		</div>
	</div>
</div>



@endsection