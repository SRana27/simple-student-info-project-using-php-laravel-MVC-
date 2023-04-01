<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/student-form',[HomeController::class,'addstd_from'])->name('student.from');
Route::post('/add-student',[HomeController::class,'student_add'])->name('add.student');
Route::get('/student-info',[HomeController::class,'student_info'])->name('student.info');
Route::get('/student-edit-from/{student_id}',[HomeController::class,'student_edit_from'])->name('student.edit.from');
Route::get('/student-update',[HomeController::class,'student_update'])->name('student.update');
Route::post('/student-edit',[HomeController::class,'student_edit'])->name('student.edit');
Route::post('/student-delete',[HomeController::class,'student_delete'])->name('student.delete');

Route::get('/department-from',[DepartmentController::class,'dept_from'])->name('department.from');
Route::post('/add-department',[DepartmentController::class,'add_department'])->name('add.department');
Route::get('/department-info',[DepartmentController::class,'department_info'])->name('department.info');
Route::get('/department-update',[DepartmentController::class,'department_update'])->name('department.update');
Route::get('/department-edit-from/{dept_id}',[DepartmentController::class,'department_edit_from'])->name('department.edit.from');
Route::post('/department-edit',[DepartmentController::class,'department_edit'])->name('department.edit');
Route::post('/department-delete',[DepartmentController::class,'department_delete'])->name('department.delete');

