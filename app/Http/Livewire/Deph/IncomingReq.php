<?php

namespace App\Http\Livewire\Deph;

use Livewire\Component;

class IncomingReq extends Component
{
    public $isviewopen = false;
    public $isapproveopen = false;
    public $isdisapproveopen = false;
    public $dvid;
    public function render()
    {
        return view('livewire.deph.incoming-req');
    }
    public function openviewmodal($dv_id){
        $this->isviewopen=true;
        $this->dvid = $dv_id;
    }
    public function openapprovemodal($dv_id){
        $this->isapproveopen=true;
        $this->dvid = $dv_id;
    }
    public function opendisapprovemodal($dv_id){
        $this->isdisapproveopen=true;
        $this->dvid = $dv_id;
    }
    public function testButton($nagsend){
        $this->isviewopen= false;
        $this->isapproveopen= false;
        $this->isdisapproveopen= false;
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
