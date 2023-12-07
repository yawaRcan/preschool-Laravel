<?php

namespace App\Http\Livewire;
use DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Student extends Component
{
use WithFileUploads;
public $email='';
    public $studentFrm = [
        // 'student_id' => 1,
        'rollnum' => '',
        'firstname' => '',
        'lastname' => '',
        'gender' => '',
        'dateofbirth' => '',
        'bloodgroup' => '',
        'religion' => '',
        'email' => '',
        'password' =>'',
        'department' => '',
        'class' => '',
        'section' => '',
        'phone_number' => '',
        'student_image' => '',
    ];

    protected $rules = [
        'studentFrm.rollnum' => 'required',
        'studentFrm.firstname' => 'required',
        'studentFrm.lastname' => 'required',
        'studentFrm.gender' => 'required',
        'studentFrm.dateofbirth' => 'required',
        'studentFrm.bloodgroup' => 'required',
        'studentFrm.religion' => 'required',
        'email' => ['required','unique:student','email','not_in'],
        'studentFrm.password' => ['required','min:8','max:9'],
        'studentFrm.department' => ['required','integer'],
        'studentFrm.class' => 'required',
        'studentFrm.section' => 'required',
        'studentFrm.phone_number' => 'required',
        'studentFrm.student_image' => ['required','image','max:1024'],
    ];
    public function updated($field)
    {
        $this->validateOnly($field,$this->rules);
    }

    public function mount()
    {
       $singleStudent = DB::table('student')->orderBy('id','DESC')->take('1')->first();
       $student_Id = (int)$singleStudent->id ?? 0;
       $this->studentFrm['rollnum'] = date('y').$student_Id+1;

    }
    public function render()
    {
        $department = DB::table('department')->get();
        $class = DB::table('courses')
       ->when($this->studentFrm['department'], function($query, $id) {
           return $query->where('department_id', $id);
        })
        ->get();

        $section = DB::table('section')->get();
        return view('livewire.student',['department' => $department,'class'=>$class,'section'=>$section])->extends('admin-portal/layouts/master')->section('content');
    }

    public function store()
    {

      sleep(2);
       $this->validate($this->rules);
       if($this->studentFrm['student_image']!='') {
        $ImageName = uniqid().'.'.$this->studentFrm['student_image']->extension();
        $this->studentFrm['student_image']->storeAs('students',$ImageName);
        $ImagePath = asset('uploads/students').'/'.$ImageName;
         $this->studentFrm['student_image']= $ImagePath;
       } 

        $this->studentFrm['email'] = $this->email;
        $this->studentFrm['department'] = $this->department;

       DB::table('student')->insert($this->studentFrm);
    }
}
