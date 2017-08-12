<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAll()
    {
        $students=Student::all();
       // dd($students->pluck('first_name'));
       //dd($students->pluck('grade')->max());
       // dd($students->pluck('grade'));
       // return  view('/students.all',compact('students'));
      //  dd($students->first()->level->students); this the same as this //$students=Student::all();
    }

    public function restoreStudent($id)
    {
        $students = Student::onlyTrashed()->find($id);
        $students->restore();
       return  redirect('/');
      // return $students;
    }
    public function addStudent(Request $request)
    {
        $student=new Student;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name  ;
        $student->grade = $request->grade;
        $student->save();
       return  redirect('/');

    }

    public function getAddForm()
    {
        return view('students.add');

    }
    public function deleteStudent(Student $student)
    {
        //$studen=Student::find($id);
        $student->delete();
        return "Deleted";
    }

    public function updateStudent(Student $student)
    {
        $student->grade="90";
        $student->update();
        return "Updated";
    }
}
