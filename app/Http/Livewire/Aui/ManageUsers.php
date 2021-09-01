<?php

namespace App\Http\Livewire\Aui;

use Livewire\Component;
use App\Models\Departments;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use App\Models\Positions;
use App\Models\Roles;
use App\Models\User;

class ManageUsers extends Component
{
    use WithFileUploads;

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
    public $password_confirmation;
    public $role_id=1;
    public $department_id=1;
    public $position_id=1;
    public $photo;

    

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
        //dd($this->role_id, $this->department_id, $this->position_id);

        $this->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'birth_day' => 'required',
            'contact_number' => 'required',
            'email' =>  'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8',
            'role_id' => 'required',
            'department_id' => 'required',
            'position_id' => 'required',
            'photo' => 'image|max:2048',
        ]);  

                // Execution doesn't reach here if validation fails.
                $user = new User;
                $user->first_name = $this->first_name;
                $user->middle_name = $this->middle_name;
                $user->last_name = $this->last_name;
                $user->suffix = $this->suffix;
                $user->address = $this->address;
                $user->birth_day = $this->birth_day;
                $user->contact_number = $this->contact_number;
                $user->email = $this->email;
                $user->username = $this->username;
                $user->password = Hash::make($this->password);
                $user->role_id =  $this->role_id;
                $user->department_id = $this->department_id;
                $user->position_id = $this->position_id;
                $user->profile_photo_path = $this->photo->store('profile-photos', 'public');
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
    }
}
