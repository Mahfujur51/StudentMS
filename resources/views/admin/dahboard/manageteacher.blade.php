@extends('admin.dahboard.dashboard')
@section('content')
<div class="content-wrapper">
	<h1 class="page-title">Teacher</h1>
	<div class="card">
		<div class="card-body">
			@if (Session::has('success'))
			<div class="alert alert-success">
				<p>{{Session::get('success')}}</p>
			</div>
			@endif
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<h2 class="card-title">Teacher</h2>
			<div class="row">
				<div class="col-12">
					<table id="order-listing" class="table table-striped" style="width:100%;">
						<thead>
							<tr>
								<th>Sl</th>
								<th>Name</th>	
								<th>Salary</th>	
								<th>Department</th>
								<th>Email</th>
								<th>Image</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($teachers as $key => $teacher)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$teacher->name}}</td>
								<td>{{$teacher->salary}}</td>
							
								<td>
									@if ($teacher->dept==1)
									{{'CSE'}}
									@elseif($teacher->dept==2)
									{{'EEE'}}
									@elseif($teacher->dept==3)
									{{'IPE'}}
									@elseif($teacher->dept==4)
									{{'PME'}}
									@elseif($teacher->dept==5)
									{{'CHE'}}
									@elseif($teacher->dept==6)
									{{'TE'}}
									@elseif($teacher->dept==7)
									{{'BME'}}
									@endif
								</td>
								<td>{{$teacher->email}}</td>
								
								
								
								
								<td><img src="{{ asset('images/teacher/'.$teacher['image']) }}" height="100px" >
									<td>
									@if ($teacher->status==1)
									<label class="badge badge-info">Active</label>
									@else
									<label class="badge badge-danger">Unactive</label>
									@endif
								</td>
								<td>
									<a href="{{route('admin.manage_teacher',$teacher->id)}}"><button class="btn btn-warning">View</button></a>
									<a href="{{ route('admin.teacher.edit',$teacher->id) }}"><button class="btn btn-success">Edit</button></a>
									<a href="{{ route('admin.delete_teacher',$teacher->id) }}"><button class="btn btn-danger" >Delete</button></a>
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