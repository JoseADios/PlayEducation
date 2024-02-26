<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PruebaComp extends Component
{
    public $prueba;

    public function mount() {
        $this->prueba = '';
    }

    public function setData($data) {
        $this->prueba = $data;
        session()->flash('Funcion prueba ejecutada');

    }

    public function render()
    {
        return view('livewire.prueba-comp');
    }
}
