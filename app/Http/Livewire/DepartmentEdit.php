<?php

namespace App\Http\Livewire;
use DB;
use Livewire\Component;

class DepartmentEdit extends Component
{
public $department_id ,$departmentName,$hod,$startDate,$nostu;

    public function mount($id) {
       $edit = DB::table('department')->where('department_id',$id)->first();
     $this->department_id = $edit->department_id;
       $this->departmentName =$edit->department_name;
       $this->hod = $edit->hod;
       $this->startDate =$edit->started_year;
       $this->nostu= $edit->Num_students;
    }
    public function render()
    {
        return view('livewire.department-edit')->extends('admin-portal/layouts/master')->section('content');
    }
    public function updateRec(){
    $data = [];
    $data['department_name'] = $this->departmentName;
    $data['hod'] = $this->hod;
    $data['started_year'] = $this->startDate;
    $data['Num_students'] = $this->nostu;
    DB::table('department')->where('department_id',$this->department_id)->update($data);
    return redirect()->route('departmentList');
    }
}
