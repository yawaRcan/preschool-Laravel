<?php

namespace App\Http\Livewire;
use DB;

use Livewire\Component;

class DepartmentList extends Component
{
    public function render()
    {
       $departmentList =  DB::table('department')->orderBy('department_id','DESC')->get();
        return view('livewire.department-list',['departmentList' =>$departmentList])->extends('admin-portal/layouts/master')->section('content');
    }

    public function deleteRec($department_id){
        DB::table('department')->where('department_id',$department_id)->delete();
        return view('livewire.department-list')->extends('admin-portal/layouts/master')->section('content');

    }
}
