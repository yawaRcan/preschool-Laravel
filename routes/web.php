<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/dashboard',function(){
    return view('admin-portal.layouts.dashboard');
    })->name('dashboard');
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'App\Http\Livewire' ], function(){
   
    // ***********______***COURSES ROUTES********____________*********&&&
    Route::get('courses','Courses')->name('Add_courses');
    Route::get('courses-List','CourseList')->name('course_list');
    Route::get('courses_edit/{id}','EditCourses')->name('course_edit');

    // *********______***DEPARTMENTS ROUTE*******_____******
    Route::get('department','Department')->name('department');
    Route::get('departmentList','DepartmentList')->name('departmentList');
    Route::get('department-edit/{id}','DepartmentEdit')->name('department.edit');

    // ************____****SUBJECTS ROUTES********________&&&********()
    Route::get('add_subjects','Subjects')->name('subject');
    Route::get('subject_list','SubjectList')->name('subjectList');
     // ************____****STUDENTs ROUTES********________&&&********()
     Route::get('add_student','Student')->name('addstudent');


   
});





Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


