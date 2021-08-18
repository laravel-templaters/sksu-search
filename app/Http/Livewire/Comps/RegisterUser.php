<?php

namespace App\Http\Livewire\Comps;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use App\Models\User;
use PasswordValidationRules;
    
class RegisterUser extends Component
{


    public function render()
    {
        return view('livewire.comps.register-user');
    }



    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */

    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public $email_validation;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];

    public function store()
    {
        $this->validate();
        $email_validation = User::where('email',$this->email)->first();
        if($email_validation){

            return back();
         }




       $user = new User;
       $user->name = $this->name;
       $user->email = $this->email;
       $user->password = Hash::make($this->password);
       $user->save();
 

        $this->alert('success', 'Successfully Added!', [
            'background' => '#ccffcc',
            'padding' => '0.5rem',
            'position' =>  'top-end', 
            'timer' =>  2500,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
      ]);

      $this->name = "";
      $this->email = "";
      $this->password = "";
      $this->confirm_password = "";

      return back();

    }
}
