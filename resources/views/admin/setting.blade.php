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
			<h2 class="card-title text-center"> Update Your Profile</h2>
			<form class="forms-sample py-2 my-2" action="{{URL::to('/admin_update')}}" method="POST" enctype="multipart/form-data">
				@csrf
				
				
			
				<div class="form-group">
					<label for="exampleInputPassword1"> Student Password </label>
					<input type="Password" class="form-control p-input" name="student_password" placeholder=" Student Password" value="{{$category->admin_password}">
				</div>
				
				
				
		

				
				<button type="submit" class="btn btn-info"> Update </button>
			</form>
		</div>
	</div>
</div>



@endsection