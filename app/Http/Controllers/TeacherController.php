<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Image;

class TeacherController extends Controller
{
    public function add_teacher()
    {
        return view('admin.dahboard.add_teacher');
    }
    public function store_teacher(Request $request)
    {
        $request->validate([
            'name' => 'required |max:150',
            'description' => 'required',
            'image' => 'nullable|image',
            'email' => 'required',
            'salary' => 'required',
            'dept' => 'required',

        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->salary = $request->salary;
        $teacher->dept = $request->dept;
        $teacher->status = $request->status;
        $teacher->email = $request->email;
        $teacher->email = $request->email;
        $teacher->description = $request->description;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/teacher/' . $img);
            Image::make($image)->save($location);
            $teacher->image = $img;
        }
        $teacher->save();
        session()->flash('success', 'Teacher Inserted Success Fully !!!');
        return redirect()->back();
    }
    public function show_teacher(){
        $teachers=Teacher::get();
        return view('admin.dahboard.manageteacher',compact('teachers'));
    }
    public function manage_teacher($id){
        $teacher=Teacher::find($id);
        return view('admin.dahboard.viewteacher',compact('teacher'));

    }
    public function edit_teacher($id){
        $teachers=Teacher::find($id);
        //dd($teachers);
        return view('admin.dahboard.editteacher',compact('teachers'));
    }
    public function update_teacher(Request $request,$id){
        $request->validate([
            'name' => 'required |max:150',
            'description' => 'required',
            'image' => 'nullable|image',
            'email' => 'required',
            'salary' => 'required',
            'dept' => 'required',

        ]);
        $teacher=Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->salary = $request->salary;
        $teacher->dept = $request->dept;
        $teacher->status = $request->status;
        $teacher->email = $request->email;
        $teacher->email = $request->email;
        $teacher->description = $request->description;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/teacher/' . $img);
            Image::make($image)->save($location);
            $teacher->image = $img;
        }
        $teacher->save();
        session()->flash('success', 'Teacher Updated Success Fully !!!');
        return redirect()->back();
    }
    public function delete_teacher($id){
        $teacher=Teacher::find($id);
        $teacher->delete();
        session()->flash('success', 'Teacher Deleted Success Fully !!!');
        return redirect()->back();

    }
}
