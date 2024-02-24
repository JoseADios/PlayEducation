<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PruebaComp extends Component
{
    public $prueba;

    public function setData($data) {
        $this->prueba = $data;
    }

    public function render()
    {
        return view('livewire.prueba-comp');
    }
}
