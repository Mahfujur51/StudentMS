@extends('admin.dahboard.dashboard')
@section('content')
<div class="content-wrapper">
  <h1 class="page-title">Student Information View</h1>
  <div class="row user-profile">
    <div class="col-lg-12 side-left">
      <div class="card mb-12">
        <div class="card-body avatar">
          <h2 class="card-title">{{$student->name}} Information</h2>
          <img src="{{asset('images/student/'.$student['image'])}}" alt="">
          <p class="name">{{$student->name}}</p>
          <p class="designation">
            @if ($student->dept==1)
            Department: {{"CSE"}}
            @elseif($student->dept==2)
            Department: {{"EEE"}}
            @elseif($student->dept==3)
            Department: {{"IPE"}}
            @elseif($student->dept==4)
            Department: {{"PME"}}
            @elseif($student->dept==5)
            Department: {{"CHE"}}
            @elseif($student->dept==6)
            Department: {{"BME"}}
            @elseif($student->dept==7)
            Department: {{"TE"}}
            @endif
          </p>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Father Name:</th>
                <th>{{$student->fname}}</th>
                
              </tr>
            </thead>

            <tr>
              <th>Mother Name</th>
              <th>{{$student->mname}}</th>
              
            </tr>
            <tr>
              <th>Roll:</th>
              <th>{{$student->roll}}</th>
              
            </tr>
            <tr>
              <th>Email:</th>
              <th>{{$student->email}}</th>
              
            </tr>
            <tr>
              <th>Distric:</th>
              <th>{{$student->distric}}</th>
            </tr>  
            <tr>
              <th>Description:</th>
              <th>{{$student->description}}</th>
            </tr> 
              
          </table>
        </div>
      </div>
      <div class="card mb-12">
        <div class="card-body overview">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
</div>
@endsection