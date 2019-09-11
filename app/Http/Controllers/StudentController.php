<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use Image;
class StudentController extends Controller
{
	public function index(){
		return view('admin.create_student');
	}

	public function store(Request $request){
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
		$students->name=$request->name;
		$students->roll=$request->roll;
		$students->fname=$request->fname;
		$students->mname=$request->mname;
		$students->distric=$request->distric;
		$students->dept=$request->dept;
		$students->status=$request->status;
		$students->email=$request->email;
		$students->description=$request->description;
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
	public function show(){
		$students=Student::OrderBy('roll', 'desc')->get();
		return view('admin.dahboard.manage',compact('students'));
	}
	public function show_student($id){
			$student=Student::find($id);
			echo $student;

				}
	
}