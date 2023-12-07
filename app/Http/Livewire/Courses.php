<?php

namespace App\Http\Livewire;
use DB;

use Livewire\Component;
use Livewire\WithFileUploads;

class Courses extends Component
{
    use WithFileUploads;
    public $courseName,$courseDescription ,$courseImage , $courseDepartment;
    protected $rules = [
        'courseName' => 'required',
        'courseDepartment' =>'required',
        'courseDescription' => 'required',
        'courseImage' => ['required','image'],

    ];
    public function render()
    {    
        $departments = DB::table('department')->get();
        return view('livewire.courses',['department'=>$departments])->extends('admin-portal/layouts/master')->section('content');
    }


    public function store(){
         $this->validate($this->rules);
         sleep(1);
         $data = [];
         $data['course_name'] = $this->courseName;
         $data['department_id'] = $this->courseDepartment;
         $data['course_description'] =$this->courseDescription;
         $imageName = uniqid().'.'.$this->courseImage->extension();
         $this->courseImage->storeAs('courses', $imageName);
         $imagePath = asset('uploads/courses').'/'.$imageName;
         $data['course_image'] = $imagePath;
         DB::table('courses')->insert($data);
         $this->reset();
         $this->dispatchBrowserEvent('submitCourse');

         
    }
}
