<?php

namespace App\Http\Livewire\Secretariat;

use Livewire\Component;

class CreateDv extends Component
{
    //panels
    public $isstep1open = true;
    public $isstep2open = false;
    public $isstep3open = false;


    //form variables for wire model
    //example only
    public $name;



    public function render()
    {
        return view('livewire.secretariat.create-dv');
    }

    public function validateForm($to){
        $this->validate([
            'name'=>'required'
        ]);
        switch ($to) {
            case 1:
                $this->openstep1();
                break;
            case 2:
                $this->openstep2();
            break;

            case 3:
                $this->openstep3();
            break;
            
        }
    }

    public function openstep1(){
        
        $this->isstep2open = false;
        $this->isstep3open = false;
        $this->isstep1open = true;
    }
    
    public function openstep2(){
        $this->isstep1open = false;
        $this->isstep3open = false;
        $this->isstep2open = true;
    }

    public function openstep3(){
        $this->isstep1open = false;
        $this->isstep3open = true;
        $this->isstep2open = false;
    }
    

}
