@extends('layout')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title"> All Students </h2>
       @php
      $student = DB::table('student')
      ->count('student_id');
      @endphp
      <p style="font-family: cursive;font-size: 30px;font-weight: bold; text-align: center;">{{$student}}</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-1" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title"> All Teachers </h2>
       @php
      $teacher = DB::table('teacher')
      ->count('teacher_id');
      @endphp
        <p style="font-family: cursive;font-size: 30px;font-weight: bold; text-align: center;">{{$teacher}}</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title"> Tution Fee </h2>
     <p style="font-family: cursive;font-size: 29.9px;font-weight: bold; text-align: center;">Monthy:2500Tk</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-3" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Revenue</h2>
        <p style="font-family: cursive;font-size: 30px;font-weight: bold; text-align: center;">Revenue</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-4" class="card-float-chart"></div>
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4 grid-margin d-flex align-items-stretch">
    <div class="row">
      <div class="col-12 grid-margin d-flex align-items-stretch">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-12 mb-3">
            <div class="social-panel bg-facebook"><p class="mb-0"> Computer Science </p></div>
          </div>
          <div class="col-12 col-sm-6 col-md-12 mb-3">
            <div class="social-panel bg-twitter"><p class="mb-0"> BBA </p></div>
          </div>
          <div class="col-12 col-sm-6 col-md-12 mb-3">
            <div class="social-panel bg-google"><p class="mb-0"> MBA </p></div>
          </div>
          <div class="col-12 col-sm-6 col-md-12 mb-3">
            <div class="social-panel bg-google"><p class="mb-0"> EEE </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-12 mb-3">
            <div class="social-panel bg-google"><p class="mb-0"> English </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 grid-margin d-flex align-items-stretch">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card user-visits w-100">
        <div class="card-body">
          <h2 class="card-title">User Visits</h2>
          <div class="row mt-5">
            <div class="col-6">
              <p class="views text-muted">Views</p>
              <p class="section">6080 sessions</p>
              <a href="#" class="btn btn-secondary btn-sm">More Details</a>
            </div>
            <div class="col-6">
              <div id="sparkline-line-chart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 global-card">
      <div class="card bg-warning w-100">
        <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
          <h2> Addmission Going ON</h2>
          <p>We began with intensive and in-depth session to collate the needs of stakeholders</p>
          <a href="#" class="btn btn-outline-secondary"> View Details </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>








@endsection