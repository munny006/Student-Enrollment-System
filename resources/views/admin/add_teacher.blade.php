@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
	<div class="card">
		<div class="card-body">
			<p class=" alert-dark"><?php
			$exception = Session::get('exception');
			if($exception) {
				echo $exception;
				Session::put('exception',null);
			}
			?>
		</p>
		<h2 class="card-title text-center"> ADD TEACHERS FORM</h2>
		<form class="forms-sample py-2 my-2" action="{{URL::to('/save_teacher')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="exampleInputEmail1"> Teacher Name </label>
				<input type="text" class="form-control p-input" name="teacher_name"  placeholder=" Teacher name">
			</div>
			
			<div class="form-group">
				<label for="exampleInputPassword1"> Teacher Phone </label>
				<input type="tel" class="form-control p-input" name="teacher_phone" placeholder=" Teacher Phone">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1"> Teacher Address </label>
				<input type="text" class="form-control p-input" name="teacher_address" placeholder=" Teacher address">
			</div>
			
			<div class="form-group">
				<label>Upload file</label>
				
				
				<input type="file" name="teacher_img">
				
			</div>
			
			
			<div class="form-group">
				<label for="exampleInputPassword1"> Student Department </label>
				<select class="form-control p-input" name="teacher_dept">
					<option value="1">CSE</option>
					<option value="2">EEE</option>
					<option value="3">ENGLIGH</option>
					<option value="4">BBA</option>
					<option value="5">MBA</option>

				</select>
			</div>
			<button type="submit" class="btn btn-dark"> Add Teacher </button>
		</form>
	</div>
</div>
</div>



@endsection