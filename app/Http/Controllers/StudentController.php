<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use Image;
use Session;
class StudentController extends Controller
{
	public function index()
	{
		return view('admin.create_student');
	}
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required |max:150',
			'description' => 'required',
			'image' => 'nullable|image',
			'roll' => 'required',
			'email' => 'required',
			'fname' => 'required',
			'mname' => 'required',
		]);
		$students = new Student();
		$students->name = $request->name;
		$students->roll = $request->roll;
		$students->fname = $request->fname;
		$students->mname = $request->mname;
		$students->distric = $request->distric;
		$students->dept = $request->dept;
		$students->status = $request->status;
		$students->email = $request->email;
		$students->password = $request->password;
		$students->description = $request->description;
		if (($request->image) > 0) {
			//insert image
			$image = $request->file('image');
			$img = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/student/' . $img);
			Image::make($image)->save($location);
			$students->image = $img;
		}
		$students->save();
		session()->flash('success', 'Student Inserted  Successfully !!');
		return redirect()->route('add_student');
	}
	public function show()
	{
		$students = Student::OrderBy('roll', 'desc')->get();
		return view('admin.dahboard.manage', compact('students'));
	}
	public function show_student($id)
	{
		$student = Student::find($id);
		return view('admin.dahboard.viewstudent', compact('student'));
	}
	public function edit_student($id){
		$students=Student::find($id);
		return view('admin.dahboard.editstudent',compact('students'));
	}
	public function update_student(Request $request,$id){
		$request->validate([
			'name' => 'required |max:150',
			'description' => 'required',
			'image' => 'nullable|image',
			'roll' => 'required',
			'email' => 'required',
			'fname' => 'required',
			'mname' => 'required',
		]);
		$upstudent=Student::find($id);
		$upstudent->name = $request->name;
		$upstudent->roll = $request->roll;
		$upstudent->fname = $request->fname;
		$upstudent->mname = $request->mname;
		$upstudent->distric = $request->distric;
		$upstudent->dept = $request->dept;
		$upstudent->status = $request->status;
		$upstudent->email = $request->email;
		$students->password = $request->password;
		$upstudent->description = $request->description;
		if (($request->image) > 0) {
			//insert image
			$image = $request->file('image');
			$img = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/student/' . $img);
			Image::make($image)->save($location);
			$upstudent->image = $img;
		}
		$upstudent->save();
		session()->flash('success', 'Student Update  Successfully !!');
		return back();
	}
	public function delete($id){
		$students=Student::find($id);
		$students->delete();
		session()->flash('success', 'Student Deleted  Successfully !!');
		return back();
	}
	public function login(Request $request){
		
		$email=$request->email;
		$password=$request->password;
		$students=Student::where('email','=',$email)
		->where('password','=',$password)
		->first();
		
		if($students){
			Session::put('email',$students->email);
			Session::put('id',$students->id);
			//dd($students);
			return redirect()->route('student.dashboard');
			
		}



		else{
			Session()->flash('success','Invalid Email & and password');
			return redirect()->route('index');
		}
		
	}

	public function studentview() 
	{
		$id=Session::get('id');
		$student=Student::find($id);
	
 		return view('student.studentview',compact('student'));
	}
	public function dashboard(){




		return view('student.dashboard');
	}
	public function studentlogin(){
		return view('welcome');
	}
	protected function loggedOut(Request $request) {
		Session::put('email',null);
		Session::put('id',null);
		return redirect('index');
	}

	public function studentupdate(){
		$id=Session::get('id');
		$student=Student::find($id);
		return view('student.studentsettings',compact('student'));
	}

	public function update_password(Request $request,$id){
		//$id=Session::get('id');
		$student=Student::find($id);



		$student->password=$request->password;
		$student->save();
		session()->flash('success', 'Password Updated  Successfully !!');
		return back();

	}
		
}