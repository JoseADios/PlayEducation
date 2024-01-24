<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Eventos extends Component
{

    public $mensaje = 'Hola Mundo';

    #[On('evento')]
    public function evento($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function render()
    {
        return view('livewire.eventos');
    }
}
