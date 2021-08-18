<?php

namespace App\Http\Livewire\Deph;

use Livewire\Component;

class PendingReq extends Component
{
    public $isCloseOpen = false;
    public $isViewOpen = false;
    public $isCancelOpen = false;
    public $dvID;
    public function render()
    {
        return view('livewire.deph.pending-req');
    }
    public function openCloseModal($dv_id){
        $this->dvID = $dv_id;
        $this->isCloseOpen= true;
   }
   public function openViewModal($dv_id){
        $this->dvID = $dv_id;
        $this->isViewOpen= true;
    }
    public function openCancelModal($dv_id){
        $this->dvID = $dv_id;
        $this->isCancelOpen= true;
    }

    public function testButton($nagsend){
        $this->isViewOpen= false;
        $this->isCancelOpen= false;
        $this->isCloseOpen= false;
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
