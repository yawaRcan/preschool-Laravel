<?php

namespace App\Http\Livewire;
use DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCourses extends Component
{
    use WithFileUploads;
    public   $CID = 0,$courseName,$courseDepartment ,$courseDescription,$courseImage,$oldimage=0;
    // protected $rules =[
    //     'course_name' => 'required',
    //     'department_id' => 'required',
    //     'course_description' => 'required',
    //     'course_image' => 'required',
    // ];
    public function render()
    {
       $department = DB::table('department')->get();
        return view('livewire.edit-courses',['department'=> $department])->extends('admin-portal/layouts/master')->section('content');
    }
    public function mount($id)
    {
         $edit = DB::table('courses')->where('course_id',$id)->first();
         $this->CID = $edit->course_id;
         $this->courseName = $edit->course_name;
         $this->courseDepartment = $edit->department_id;
         $this->courseDescription = $edit->course_description;
         $this->oldimage = $edit->course_image;
    }
    // public function updated($field)
    // {
    //     $this->validateOnly($field ,$this->rules);
    // }
    public function update()
    {
        $data = [];
         $data['course_name'] = $this->courseName;
         $data['department_id'] = $this->courseDepartment;
         $data['course_description'] =$this->courseDescription;
       
       if($this->courseImage!=''){
        $imageName = uniqid().'.'.$this->courseImage->extension();
        $this->courseImage->storeAs('courses',$imageName);
        $imagePath = asset('uploads/courses').'/'.$imageName;
        $data['course_image'] = $imagePath;
        DB::table('courses')->where('course_id' ,$this->CID)->update($data);
       
       }
       else{
        $data['course_image'] = $this->oldimage;
        DB::table('courses')->where('course_id' ,$this->CID)->update($data);
       }
       
       $this->dispatchBrowserEvent('updateCourse');

    }
}
