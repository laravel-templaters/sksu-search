<?php

namespace App\Http\Livewire\Aui;

use Livewire\Component;
use App\Models\Departments;
use App\Models\Positions;
use App\Models\Roles;
use App\Models\User;

class ManageUsers extends Component
{
    public $selectedDept="";

    //user info
    public $first_name;
    public $middle_name;
    public $last_name;
    public $suffix;
    public $address;
    public $birth_day;
    public $contact_number;
    public $email;
    public $username;
    public $password;
    public $role_id;
    public $department_id;
    public $position_id;
    public $photo;

    protected $rules = [
         'first_name' => 'required',
        //  'last_name' => 'required',
        //  'address' => 'required',
        //  'birth_day' => 'required',
        //  'contact_number' => 'min:11|max:11',
        //  'email' => 'required|email',
        //  'username' => 'required',
        //  'password' => 'required|min:8',
        //  'role_id' => 'required',
        //  'department_id' => 'required',
        //  'position_id' => 'required',   
    ];

    public function render()
    { 
        
        $departments = Departments::get();
        $positions = Positions::get();
        $roles = Roles::get();
        $users = User::where('department_id', $this->selectedDept == "" ? 1 : $this->selectedDept)->get();
        return view('livewire.aui.manage-users')
        ->layout('layouts.app')->with('departments', $departments)->with('positions', $positions)->with('roles', $roles)->with('users', $users);
    }

    public function submit()
    {

        $this->validate();
   
        // Execution doesn't reach here if validation fails.
 
        $user = new User;
        $user->first_name = $this->first_name;
        $user->middle_name = $this->middle_name;
        $user->last_name = $this->last_name;
        $user->address = $this->address;
        $user->birth_day = $this->birth_day;
        $user->contact_number = '09816237644';
        $user->email = $this->email;
        $user->username = $this->username;
        $user->password = $this->password;
        $user->role_id = 2;
        $user->department_id =3;
        $user->position_id = 1;
        //$user->photo = $this->photo;
        $user->save();

        // User::create([
        //     'first_name' => $this->first_name,
        //     'middle_name' => $this->middle_name,
        //     'last_name' => $this->last_name,
        //     //'suffix' => $this->suffix,
        //     'address' => $this->address,
        //     'birth_day' => $this->birth_day,
        //     'contact_number' => $this->contact_number,
        //     'email' => $this->email,
        //     'username' => $this->username,
        //     'password' => $this->password,
        //     'role_id' => $this->role_id,
        //     'department_id' => $this->department_id,
        //     'position_id' => $this->position_id,
        //     'photo' => $this->photo,
        // ]);

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

    }
}
