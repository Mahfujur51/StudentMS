@extends('admin.dahboard.dashboard')
@section('content')
<div class="content-wrapper">
  <h1 class="page-title">Student Information View</h1>
  <div class="row user-profile">
    <div class="col-lg-12 side-left">
      <div class="card mb-12">
        <div class="card-body avatar">
          <h2 class="card-title">{{$teacher->name}} Information</h2>
          <img src="{{asset('images/teacher/'.$teacher['image'])}}" alt="">
          <p class="name">{{$teacher->name}}</p>
          <p class="designation">
            @if ($teacher->dept==1)
            Department: {{"CSE"}}
            @elseif($teacher->dept==2)
            Department: {{"EEE"}}
            @elseif($teacher->dept==3)
            Department: {{"IPE"}}
            @elseif($teacher->dept==4)
            Department: {{"PME"}}
            @elseif($teacher->dept==5)
            Department: {{"CHE"}}
            @elseif($teacher->dept==6)
            Department: {{"BME"}}
            @elseif($teacher->dept==7)
            Department: {{"TE"}}
            @endif
          </p>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Salary:</th>
                <th>{{$teacher->salary}}</th>
                
              </tr>
            </thead>

          
            <tr>
              <th>Email:</th>
              <th>{{$teacher->email}}</th>
              
            </tr> 
            <tr>
              <th>Description:</th>
              <th>{{$teacher->description}}</th>
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