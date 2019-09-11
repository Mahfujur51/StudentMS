@extends('admin.dahboard.dashboard')
@section('content')
<div class="content-wrapper">
	<h1 class="page-title">Data table</h1>
	<div class="card">
		<div class="card-body">
			<h2 class="card-title">Data table</h2>
			<div class="row">
				<div class="col-12">
					<table id="order-listing" class="table table-striped" style="width:100%;">
						<thead>
							<tr>
								<th>Sl</th>
								<th>Name</th>
								<th>Roll</th>
								<th>Father Name</th>
								<th>Mother Name</th>
								<th>Department</th>
								<th>Distric</th>
								
								
								<th>Image</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
						@foreach ($students as $key => $student)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$student->name}}</td>
								<td>{{$student->roll}}</td>
								<td>{{$student->fname}}</td>
								<td>{{$student->mname}}</td>
								<td>
									@if ($student->dept==1)
									{{'CSE'}}
									@elseif($student->dept==2)
									{{'EEE'}}
									@elseif($student->dept==3)
									{{'IPE'}}
									@elseif($student->dept==4)
									{{'PME'}}
									@elseif($student->dept==5)
									{{'CHE'}}
									@elseif($student->dept==6)
									{{'TE'}}
									@elseif($student->dept==7)
									{{'BME'}}
									@endif
								</td>
								<td>{{$student->distric}}</td>
								
								
								
							<td><img src="{{ asset('images/student/'.$student['image']) }}" height="100px" >			<td>
									@if ($student->status==1)
									<label class="badge badge-info">Active</label>
									@else
									<label class="badge badge-danger">Unactive</label>
									@endif
								</td>
								<td>
								<a href="{{route('admin.manage_student',$student->id)}}"><button class="btn btn-warning">View</button></a>
									<a><button class="btn btn-outline-success">Edit</button></a>
									<a><button class="btn btn-outline-danger">Delete</button></a>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection