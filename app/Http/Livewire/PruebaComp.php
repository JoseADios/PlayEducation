<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PruebaComp extends Component
{
    public $prueba = 'pruebaaaaa';

    public function render()
    {
        return view('livewire.prueba-comp');
    }
}
