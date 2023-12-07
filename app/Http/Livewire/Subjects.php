<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class Subjects extends Component
{
    public $courseName,$subjectName;
    public function render()
    {   
        $courses = DB::table('courses')->get();
        return view('livewire.subjects',['courses' => $courses])->extends('admin-portal/layouts/master')->section('content');
    }
    public function store()
    {
        sleep(2);
        $data = [];
        $data['subject_Name'] = $this->subjectName;
        $data['CourseName'] = $this->courseName;
        DB::table('prsubjects')->insert($data);
       $this->dispatchBrowserEvent('subjectInsert');
 

    }
}
