@extends('student.dashboard')
@section('content')
<div class="row">
	<div class="card card-body">
		@if (Session::has('success'))
		<div class="alert alert-success">
			<p>{{Session::get('success')}}</p>
		</div>
		@endif
		<form action="{{ route('student.pass.update',$student->id) }}" method="POST">
			@csrf
			<div class="form-group">
				<label for="password">Update Password:</label>
				<input type="text" name="password" class="form-control" value="{{$student->password}}">
			</div>
			<input type="submit" value="Update Password" class="btn btn-success">

		</form>
	</div>
</div>
@endsection