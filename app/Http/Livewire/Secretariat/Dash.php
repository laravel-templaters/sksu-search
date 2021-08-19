<?php

namespace App\Http\Livewire\Secretariat;

use Livewire\Component;

class Dash extends Component
{
    public $ispanelopen=false;
    public $dvid;
    public $searchterm;
    public function render()
    {
        return view('livewire.secretariat.dash');
        
    }
    public function openPanel($dv_id){
        $this->ispanelopen=true;
        $this->dvid = $dv_id;
      
    }
    public function search($nagsend){
        $this->alert('success', $nagsend, [
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
