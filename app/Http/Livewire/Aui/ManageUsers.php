<?php

namespace App\Http\Livewire\Aui;

use Livewire\Component;

class ManageUsers extends Component
{
    public $selectedDept="";
    public function render()
    {
        return view('livewire.aui.manage-users')
        ->layout('layouts.admin');
    }
}
