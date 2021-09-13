@extends('student_layout')
@php
function convert_Dept($value){
$values=[
1=>'CSE',
1=>'EEE',
3=>'ENGLISH',
4=>'BBA',
5=>'MBA'
];
return $values[$value];
}
@endphp
@section('content')

<div class="row user-profile">
  <div class="col-lg-12 side-left">
    <div class="card mb-6">
      <div class="card-body avatar">
        <h2 class="card-title">Info</h2>
        <img src="{{URL::to($studentprofile->student_img)}}" alt="">
        <p class="name"> Name : {{$studentprofile->student_name}}</p>
        <p class="designation"> Roll : {{$studentprofile->student_roll}}</p>
        <a class="email" href="#"> Email : {{$studentprofile->student_email}}</a>
        <a class="number" href="#"> Phone : {{$studentprofile->student_Phone}}</a>
      </div>
    </div>
    <div class="card mb-6">
      <div class="card-body overview">
        <!--<h1 style="color: maroon;font-size: cursive;font-weight: bolder"> Metropolitan University</h1>-->
        <!--<ul class="achivements">
          <li><p>34</p><p>Projects</p></li>
          <li><p>23</p><p>Task</p></li>
          <li><p>29</p><p>Completed</p></li>
        </ul>-->
        <div class="wrapper about-user">
          <h2 class="card-title mt-4 mb-3">About</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="info-links">

          <i class="icon-globe icon"style="font-size: 15px!important"> Father Name : </i>
          <span style="font-size: 15px!important">{{$studentprofile->student_fathername}}</span>
          <br>


          <i class="icon-social-facebook icon"style="font-size: 15px!important"> Mother Name : </i>
          <span style="font-size: 15px!important">{{$studentprofile->student_mothername}}</span>
          <br>
          <i class="icon-globe icon"style="font-size: 15px!important"> Address : </i>
          <span style="font-size: 15px!important">{{$studentprofile->student_address}}</span>
          <br>
          <i class="icon-globe icon"style="font-size: 15px!important"> Department : </i>
          <span style="font-size: 15px!important">{{convert_Dept($studentprofile->student_dept)}}</span>
          <br>
          <i class="icon-globe icon"style="font-size: 15px!important"> Addmision Year: </i>
          <span style="font-size: 15px!important">{{$studentprofile->student_addmissionyear}}</span>
          <br>


        </div>
      </div>
    </div>
  </div>

</div>


@endsection