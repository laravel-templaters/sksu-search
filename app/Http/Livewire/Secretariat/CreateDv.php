<?php

namespace App\Http\Livewire\Secretariat;

use App\Models\User;
use Livewire\Component;

class CreateDv extends Component
{
    //panels
    public $isstep1open = true;
    public $isstep2open = false;
    public $isstep3open = false;
    public $newDV = true;
    public $step1finished = false;
    public $step2finished = false;
    public $step3finished = false;

    //variable forsearch
    public $searchuser;
    public $searchedusers;
    
    //variable for first name and last name
    public $fn;
    public $ln;

    //form variables for wire model
    public $user_id;
    public $mode_of_payment;
    public $dv_type_id;
    public $dv_category_id;
    public $entity_title;


    public function render()
    {
        $this->searchedusers= User::where('first_name',"LIKE","%{$this->searchuser}%")->orWhere('middle_name',"LIKE","%{$this->searchuser}%")->orWhere('last_name',"LIKE","%{$this->searchuser}%")->get();
        return view('livewire.secretariat.create-dv')->with('searchedusers', $this->searchedusers);
       
    }

    public function validateForm($to){
        $this->validate([
            'entity_title'=>'required'
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

    public function sUid($id){
        $this->user_id=$id;
        $names=User::where('id',$id)->get();
        foreach($names as $name){
            $this->fn=$name->first_name;
            $this->ln=$name->last_name;
        }
    }

    public function openstep1(){
        
        $this->isstep2open = false;
        $this->isstep3open = false;
        $this->isstep1open = true;
    }
    
    public function openstep2(){
        
        $this->step1finished = true;
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
