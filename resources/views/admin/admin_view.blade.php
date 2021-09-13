@extends('layout')
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
        <h2 class="card-title text-center">Info</h2>
       
        <p class="name"> Name : {{$adminprofile->admin_name}}</p>
        
        <a class="email" href="#"> Email : {{$adminprofile->admin_email}}</a>
        
      </div>
    </div>
    
  </div>

</div>


@endsection