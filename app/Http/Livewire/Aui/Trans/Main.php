<?php

namespace App\Http\Livewire\Aui\Trans;

use Livewire\Component;

class Main extends Component
{
    public $isopen = false;
    public $dvID;
    public function render()
    {
        return view('livewire.aui.trans.main');
    }
    public function openViewModal($dv_id){
        $this->isopen = true;
        $this->dvID = $dv_id;
    }
    
}
