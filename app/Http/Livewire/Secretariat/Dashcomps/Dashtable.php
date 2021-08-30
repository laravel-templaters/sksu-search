<?php

namespace App\Http\Livewire\Secretariat\Dashcomps;

use Livewire\Component;

class Dashtable extends Component
{
    public $searchterm;
    public function render()
    {
        return view('livewire.secretariat.dashcomps.dashtable');
    }
    public function search()
    {
        $this->alert('success', $this->searchterm, [
            'background' => '#ccffcc',
            'padding' => '1rem',
            'position' =>  'top-end', 
            'timer' =>  1800,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
      ]);
    }
}
