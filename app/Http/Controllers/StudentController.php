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
            return $student;
        } else {
            return ' Something went worng while adding the student ';
        }
    }
}
