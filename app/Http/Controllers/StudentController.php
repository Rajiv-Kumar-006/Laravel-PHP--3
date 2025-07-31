<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Student;

class StudentController extends Controller
{
    //

    public function add(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->rollno = $request->rollno;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();

        if ($student) {
            return redirect('add')->with('success', 'Student added successfully!');
        } else {
            return redirect('add')->with('error', 'Something went wrong while adding the student.');
        }
    }

    public function studentList(Request $requrest)
    {
        $studentList = Student::all();
        return view('studentslist', ['students' => $studentList]);
    }

    public function delete($id)
    {
       $isDeleted = Student::destroy($id);
       if($isDeleted){
         return redirect('list')->with('success', 'Student deleted successfully!');
       }
    }

  
public function edit($id)
{
    $students = Student::all(); // Keep showing the table
    $editStudent = Student::findOrFail($id); // Pass the one to edit
    return view('/list', compact('students', 'editStudent'));
}
}
