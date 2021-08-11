<?php

namespace App\Http\Livewire\Comps\Doctray;

use Livewire\Component;
use App\Models\Info;

class RightSidebar extends Component
{
    public $userId;
    public $info;

    public $listeners = ['updateMeta' => 'showData'];

    public function render()
    {
        return view('livewire.comps.doctray.right-sidebar');
    }

    public function showData($id)
    {
        $this->info = Info::find($id);
       // $this->info = Info::all()->where('id',$id)->first();
    }
}
