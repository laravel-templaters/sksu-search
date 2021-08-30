<?php

namespace App\Http\Livewire\Aui;

use Livewire\Component;
use App\Models\Departments;
use App\Models\User;

class ManageUsers extends Component
{
    public $selectedDept="";
    
    public function render()
    { 
        
        $departments = Departments::get();  
        $users = User::where('department_id', $this->selectedDept == "" ? 1 : $this->selectedDept)->get();
        return view('livewire.aui.manage-users')
        ->layout('layouts.app')->with('departments', $departments)->with('users', $users);
    }
}
