<?php

namespace App\Http\Livewire;
use DB;


use Livewire\Component;

class SubjectList extends Component
{
    public $subjectName, $course ,$subject_id=0;
    public function render()
    {
       $subjects = DB::table('prsubjects')->get();
       $courses = DB::table('courses')->get();

        return view('livewire.subject-list',['subjects'=> $subjects ,'courses'=>$courses])->extends('admin-portal/layouts/master')->section('content');
    }
    public function edit($id)
    {
        $singleRecord = DB::table('prsubjects')->where('subject_id',$id)->first();
        $this->subject_id = $singleRecord->subject_id;
        $this->subjectName = $singleRecord->subject_Name;
        $this->course = $singleRecord->CourseName;
        $this->dispatchBrowserEvent('toggle-modal',[]);
    }
  
   public function update()
   {
    $data = [];
    $data['subject_Name'] = $this->subjectName;
    $data['CourseName'] = $this->course;
    DB::table('prsubjects')->where('subject_id',$this->subject_id)->update($data);
    $this->dispatchBrowserEvent('toggle-modal',[]);


   }
    public function deleteSub($deleteSub)
    {
        DB::table('prsubjects')->where('subject_id', $deleteSub)->delete();
        return view('livewire.subject-list')->extends('admin-portal/layouts/master')->section('content');
    }
}
