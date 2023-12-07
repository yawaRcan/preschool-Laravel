<?php

namespace App\Http\Livewire;
use DB;
use Livewire\Component;

class CourseList extends Component
{
   public $searchByCourse='', $searchByDep='';
    public function render()
    {
        $courseList = DB::table('courses')
        ->when($this->searchByCourse, function($query, $search){
            return $query->where('courses.course_name','Like', '%'.$search.'%');
        })
        ->when($this->searchByDep, function($query, $search){
            return $query->where('courses.department_id',$search);
        })
        ->leftJoin('department','courses.department_id','=','department.department_id')
        ->select('courses.*','department.department_name as departName') 
      
        ->orderBy('course_id','DESC')->get();

        $department = DB::table('department')->get();
        $courses = DB::table('courses')->get();
        return view('livewire.course-list',['courseList' => $courseList, 'department'=>$department, 'courses'=> $courses])->extends('admin-portal/layouts/master')->section('content');
    }
    public function deleteRec($deleteRec)
    {
         DB::table('courses')->where('course_id', $deleteRec)->delete();
         return view('livewire.course-list')->extends('admin-portal/layouts/master')->section('content');

    }
}
