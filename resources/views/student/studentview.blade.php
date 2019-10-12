@extends('student.dashboard')
@section('content')
<div class="row">
	<div class="col-lg-12 side-left">
		<span class="pull-right btn btn-success" onclick="print();">Print</span>

		<div class="card ">
			<div class="card-body text-center avatar">
				<h2 class="card-title">{{$student->name}}'s Info</h2>
				<img src="{{asset('images/student/'.$student['image'])}}" alt="Profile Picture" width="300px" height="350px">
				<p class="name"> <b>Name:  </b>  {{$student->name}}</p>
				<p class="designation"><b>Roll:</b>{{$student->roll}}</p>
				<a class="email"> <b>Email:  </b>{{$student->email}}</a>
			</div>
		</div>
		<div class="card ">
			<div class="card-body overview">
				<caption>More information</caption>
				<table class=" table table-striped table-hover">
					<tr>
						<th>Father Name:</th>
						<th>{{$student->fname}}</th>
					</tr>
					<tr>
						<th>Mother Name:</th>
						<th>{{$student->mname}}</th>
					</tr>
					<tr>
						<th>Distric:</th>
						<th>{{$student->distric}}</th>
					</tr>
					<tr>
						<th>Status</th>
						<th>
							@if($student->status==1)
							<span class="badge badge-primary">Active</span>
							@else
							<span class="badge badge-danger">Deactive</span>
							@endif
						</th>
						<tr>
							<th>Department Name: </th>
							<th>
								@if ($student->dept==1)
								{{"Computer Science & Engineering"}}
								@elseif($student->dept==2)
								{{"Electrical & Electronics Engineering"}}
								@elseif($student->dept==3)
								{{"Industrial and Production Engineering"}}
								@elseif($student->dept==4)
								{{"Patroliam and Mining Engineering"}}
								@elseif($student->dept==5)
								{{"Chemical Engineering"}}
								@elseif($student->dept==6)
								{{"Bio Medical Engineering"}}
								@elseif($student->dept==7)
								{{"Textile Engineering"}}
								@endif
							</th>
						</tr>
					</tr>
				</table>
				<div class="wrapper about-user">
					<h2 class="card-title mt-4 ">About</h2>
					<p>{{$student->description}}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection