<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Secretariat\Dash;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role_id;

        if($role == 1)
        {
            return view('dashboard');
        }else if($role == 2){
           return redirect()->route('secretariat');
        }else if($role == 3){
            return redirect()->route('department-head');
         }
    }
}
