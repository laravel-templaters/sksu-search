<?php

namespace App\Http\Livewire\Comps\Doctray;

use Livewire\Component;
use App\Models\Info;

class CenterContent extends Component
{
    public function render()
    {
        $info = Info::all();
        return view('livewire.comps.doctray.center-content')->with('info', $info);
    }
}
