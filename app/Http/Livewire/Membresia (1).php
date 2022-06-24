<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Membresia extends Component
{
    public function render()
    {
        $this->membresia = DB::table('membresias')->where('cliente_id', '=', auth()->user()->id)->get();
        return view('livewire.membresia');
    }
}
