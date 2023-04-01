<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function addstd_from()
    {
        return view('student.add-student',
            ['departments' => Department::all()
            ]);
    }

    public function student_add(Request $request)
    {

        Student::store_student_data($request);
        return back();
    }

    public function student_info()
    {
        return view('student.student-info', [
            'student_data' => Student::all()
        ]);
    }

    public function student_update()
    {
        return view('student.student-update', [
            'student_data' => Student::all()
        ]);
    }

    public function student_edit_from($id)
    {
        return view('student.student-edit', [
            'student' => Student::find($id),
            'departments' => Department::all()
        ]);
    }

    public function student_edit(Request $request)
    {
        Student::student_udate_aftter_edit($request);
        return redirect('/student-update');
    }

    public function student_delete(Request $request)
    {
        Student::student_delete($request);
        return redirect('/student-update');
    }
}
