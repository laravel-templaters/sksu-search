<?php

namespace App\Http\Livewire\Comps\Doctray;

use Livewire\Component;
use App\Models\Info;

class CenterContent extends Component
{
    public $message = '';

    public function render()
    {
        $info = Info::get();
        return view('livewire.comps.doctray.center-content')->with('info', $info);
    }

    public function setData($id)
    {
        $this->emit('updateMeta', $id);
    }
}
