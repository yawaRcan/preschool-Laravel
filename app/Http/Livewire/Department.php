<?php

namespace App\Http\Livewire;
use DB;

use Livewire\Component;



class Department extends Component
{
  
    public $DepartmentName,$hod,$startyear,$NuOfstudent, $submitBtn = 'Submit';
    protected $rules =[
        'DepartmentName' => 'required',
        'hod' => 'required',
        'startyear' => 'required',
        'NuOfstudent' =>'required',
    ];

  
    public function render()
    {
        return view('livewire.department')->extends('admin-portal/layouts/master')->section('content');
    }
    
    public function updated($field){
        $this->validateOnly($field,$this->rules);

    }
    public function store() {
        $this->validate($this->rules);
        sleep(2);
        $data = [];
        $data['department_name'] = $this->DepartmentName;
        $data['hod'] =$this->hod;
        $data['started_year'] = $this->startyear;
        $data['Num_students'] = $this->NuOfstudent;
        DB::table('department')->insert($data);
        $this->dispatchBrowserEvent('confirmStore');


    }
}
