@extends('layout')
@section('content')
<div class="card">
	<div class="card-body">
		<h2 class="card-title">Data table</h2>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr class="text-center">
							<th>Student_Roll #</th>
							<th>Student_Name</th>
							<th>Student_Phone</th>
							<th>Student_Image</th>
							<th>Student_Address</th>
							<th>Student_Department</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bba_student as $row)
						<tr class="text-center">
							<td>{{$row->student_roll}}</td>
							<td>{{$row->student_name}}</td>
							<td>{{$row->student_Phone}}</td>
							<td><img src="{{$row->student_img}}" style="width: 50px"></td>
							<td>{{$row->student_address}}</td>
							<td>
								@if($row->student_dept ==1)
								<span class="btn btn-dark">{{'CSE'}}</span>
								@elseif($row->student_dept ==2)
								<span class="btn btn-dark">{{'EEE'}}</span>
								@elseif($row->student_dept ==3)
								<span class="btn btn-dark">{{'ENGLIGH'}}</span>
								@elseif($row->student_dept ==4)
								<span class="btn btn-dark">{{'BBA'}}</span>
								@elseif($row->student_dept ==5)
								<span class="btn btn-dark">{{'MBA'}}</span>
								@else
								<span class="btn btn-outline-success">{{'no defined'}}</span>
								@endif
								
							</td> 
							<td>
								<button class="btn btn-outline-primary btn-sm"> View </button>
								<button class="btn btn-outline-warning btn-sm"> Update </button>
								<button class="btn btn-outline-success btn-sm"> Delete </button>
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