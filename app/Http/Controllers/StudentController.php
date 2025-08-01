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
        $studentList = Student::paginate(5);
        return view('studentslist', ['students' => $studentList]);
    }

    public function delete($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            return redirect('list')->with('success', 'Student deleted successfully!');
        }
    }

    public function edit($id)
    {

        $editStudent = Student::find($id);
        return view('editStudent', ['data' => $editStudent]);
    }

    public function update(Request $request, $id)
    {

        $updatedStudent = Student::find($id);
        $updatedStudent->name = $request->name;
        $updatedStudent->email = $request->email;
        $updatedStudent->rollno = $request->rollno;
        if ($updatedStudent->save()) {
            return redirect('/list')->with('success', 'Student updated successfully!');
        } else {
            return redirect('/list')->with('error', 'Failed to update student.');
        }
    }

    public function search(Request $request)
    {
        $searchStudent = Student::where('name', 'like', '%' . $request->search . '%')->get();
        return view('studentslist', ['students' => $searchStudent, "search" => $request->search]);
    }
    public function deleteMulti(Request $request){
   
        $result = Student::destroy( $request->ids);
        if($result){
            return redirect('/list')->with('success', ' Multiple Student Deleted successfully!');
        }
    }
}
