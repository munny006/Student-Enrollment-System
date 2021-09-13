@extends('layout')
@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data table</h2>
		  			<p class="alert-info">
  			 <?php
              $exception = Session::get('exception');
              if($exception) {
              	echo $exception;
              	Session::put('exception',null);
      }
?>
</p>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr class="text-center">
							<th>Teacher_Name</th>
							<th>Teacher_Phone</th>
							<th>Teacher_Image</th>
							<th>Teacher_Address</th>
							<th>Teacher_Department</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($category as $row)
						<tr class="text-center">
							
							<td>{{$row->teacher_name}}</td>
							<td>{{$row->teacher_phone}}</td>
							<td><img src="{{$row->teacher_img}}" style="width: 50px"></td>
							<td>{{$row->teacher_address}}</td>
							<td>
								@if($row->teacher_dept ==1)
								<span class="btn btn-dark">{{'CSE'}}</span>
								@elseif($row->teacher_dept ==2)
								<span class="btn btn-dark">{{'EEE'}}</span>
								@elseif($row->teacher_dept ==3)
								<span class="btn btn-dark">{{'ENGLIGH'}}</span>
								@elseif($row->teacher_dept ==4)
								<span class="btn btn-dark">{{'BBA'}}</span>
								@elseif($row->teacher_deptt ==5)
								<span class="btn btn-dark">{{'MBA'}}</span>
								@else
								<span class="btn btn-outline-success">{{'no defined'}}</span>
								@endif
								
							</td>
							<td>
							<a href="{{URL::to('/teacherview/'.$row->teacher_id)}}"><button class="btn btn-outline-primary btn-sm"> View </button></a>
								
								<a href="{{URL::to('/teacher_edit/'.$row->teacher_id)}}"><button class="btn btn-outline-warning btn-sm"> Update </button></a>
								<a href="{{URL::to('/teacher_delete/'.$row->teacher_id)}}"><button class="btn btn-outline-success btn-sm"> Delete </button></a>
							</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@endsection