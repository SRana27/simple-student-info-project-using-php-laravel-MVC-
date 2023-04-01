<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

public function dept_from(){

    return view('department.add-department');
}
public function add_department(Request $request){
   Department::store_department_data($request);
   return back()->with('message','Add Successfully');
}
public function department_info(){
    return view('department.department-info',[
        'department_data'=>Department::all()
        ]
    );
}
public function department_update(){
    return view('department.department-update',[
        'department_data'=>Department::all()
    ]);
}
 public function department_edit_from($id)
 {
     return view('department.department-edit', [
         'department' => Department::find($id)
     ]);
 }
 public function department_edit(Request $request){
     Department::department_udate_aftter_edit($request);
     return redirect('/department-info');
     }

  public function department_delete(Request $request){
// return $request;
    $department= Department::find($request->department_id);
      $department->delete();
   return redirect('/department-update');
}

}
