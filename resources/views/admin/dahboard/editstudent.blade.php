@extends('admin.dahboard.dashboard')
@section('content')


<div class="content-wrapper">

	<div class="col-12  grid-margin">
		<div class="card">
			<div class="card-body">
				<h2 class="card-title">Update Student</h2>
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


				<form class="forms-sample" action="{{ route('admin.update_student',$students->id) }}" method="POST" enctype='multipart/form-data' >
					@csrf
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control p-input" id="name" name="name" aria-describedby="emailHelp" value="{{$students->name}}">
					</div>
					<div class="form-group">
						<label for="roll">Roll</label>
						<input type="text" class="form-control p-input" id="roll" name="roll" aria-describedby="emailHelp" value="{{$students->roll}}">
					</div>

					<div class="form-group">
						<label for="fname">Father Name</label>
						<input type="text" class="form-control p-input" id="fname" name="fname" aria-describedby="emailHelp" value="{{$students->fname}}">
					</div>

					<div class="form-group">
						<label for="mname">Mother Name</label>
						<input type="text" class="form-control p-input" id="mname" name="mname" aria-describedby="emailHelp" value="{{$students->mname}} ">
					</div>
					<div class="form-group">
						<label for="distric">Distric</label>
						<input type="text" class="form-control p-input" id="distric" name="distric" aria-describedby="emailHelp" value="{{$students->distric}}">
					</div> 
					<div class="form-group">
						<label for="dept">Department</label>
						<select name="dept"class="form-control p-input" id="dept">
							<option value="1" @if ($students->dept==1)  selected @endif>CSE</option>
							<option value="2" @if ($students->dept==2)  selected @endif>EEE</option>
							<option value="3" @if ($students->dept==3)  selected @endif>IPE</option>
							<option value="4" @if ($students->dept==4)  selected @endif>PME</option>
							<option value="5" @if ($students->dept==5)  selected @endif>CHE</option>
							<option value="6"@if ($students->dept==6)  selected @endif>TE</option>
							<option value="7"@if ($students->dept==7)  selected @endif>BME</option>
						</select>

					</div> 
					<div class="form-group">
						<label for="status">Student Status</label>
						<select name="status"class="form-control p-input" id="status">
							<option value="1" @if ($students->status==1) selected					@endif>Active</option>
							<option value="0">Unactive</option>
						</select>

					</div> 

					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$students->email}}">
						<small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
					</div>

					<div class="form-group">
						<label for="exampleTextarea">Description</label>
						<textarea class="form-control p-input" id="exampleTextarea" name="description" rows="3">
							{{$students->description}}
						</textarea>
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Old Image</label>
						<img src="{{asset('images/student/'.$students['image'])}}" alt="">
					</div>
					<div class="form-group">
						<label>Upload file</label>
						<div class="row">
							<div class="col-12">
								<label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
								<input type="file" name="image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">

							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control p-input" id="password" name="password" aria-describedby="emailHelp" placeholder="Enter Password ">
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection