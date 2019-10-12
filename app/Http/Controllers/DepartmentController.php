<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class DepartmentController extends Controller
{
    public function csestudent()
    {
        $students = Student::where('dept', 1)->get();
        //dd($students);


        return view('admin.dahboard.csestudent', compact('students'));
    }
    public function eeestudent()
    {
        $students = Student::where('dept', 2)->get();
        //dd($students);


        return view('admin.dahboard.eeestudent', compact('students'));
    }
    public function ipestudent()
    {
        $students = Student::where('dept', 3)->get();
        //dd($students);


        return view('admin.dahboard.ipestudent', compact('students'));
    }

    public function pmestudent()
    {
        $students = Student::where('dept', 4)->get();
        //dd($students);


        return view('admin.dahboard.pmestudent', compact('students'));
    }
    public function chestudent()
    {
        $students = Student::where('dept', 5)->get();
        //dd($students);


        return view('admin.dahboard.chestudent', compact('students'));
    }
    public function bmestudent()
    {
        $students = Student::where('dept', 6)->get();
        //dd($students);


        return view('admin.dahboard.bmestudent', compact('students'));
    }
    public function testudent()
    {
        $students = Student::where('dept', 7)->get();
        //dd($students);


        return view('admin.dahboard.testudent', compact('students'));
    }
}
