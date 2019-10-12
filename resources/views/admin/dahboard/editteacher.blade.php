@extends('admin.dahboard.dashboard')
@section('content')


<div class="content-wrapper">

	<div class="col-12  grid-margin">
		<div class="card">
			<div class="card-body">
				<h2 class="card-title">Update</h2>
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


				<form class="forms-sample" action="{{ route('admin.teacher.update',$teachers->id) }}"  method="post" enctype='multipart/form-data' >
					@csrf
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control p-input" id="name" name="name" aria-describedby="emailHelp" value="{{$teachers->name}}">
					</div>
					<div class="form-group">
						<label for="salary">Salary</label>
						<input type="text" class="form-control p-input" id="salary" name="salary" aria-describedby="emailHelp" value="{{$teachers->salary}}">
					</div>
					<div class="form-group">
						<label for="dept">Department</label>
						<select name="dept"class="form-control p-input" id="dept">
							<option value="1" @if ($teachers->dept==1)  selected @endif>CSE</option>
							<option value="2" @if ($teachers->dept==2)  selected @endif>EEE</option>
							<option value="3" @if ($teachers->dept==3)  selected @endif>IPE</option>
							<option value="4" @if ($teachers->dept==4)  selected @endif>PME</option>
							<option value="5" @if ($teachers->dept==5)  selected @endif>CHE</option>
							<option value="6"@if ($teachers->dept==6)  selected @endif>TE</option>
							<option value="7"@if ($teachers->dept==7)  selected @endif>BME</option>
						</select>

					</div> 
					<div class="form-group">
						<label for="status">Teacher Status</label>
						<select name="status"class="form-control p-input" id="status">
							<option value="1" @if ($teachers->status==1) selected					@endif>Active</option>
							<option value="0">Unactive</option>
						</select>

					</div> 

					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$teachers->email}}">
						<small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
					</div>

					<div class="form-group">
						<label for="exampleTextarea">Description</label>
						<textarea class="form-control p-input" id="exampleTextarea" name="description" rows="3">
							{{$teachers->description}}
						</textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Old Image:</label><br>
						<img src="{{ asset('images/teacher/'.$teachers['image']) }}" height="100px" >
						
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
					
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection