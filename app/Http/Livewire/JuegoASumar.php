<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Illuminate\Support\Facades\Auth;

class JuegoASumar extends Component
{
    public $estudiante;

    public function mount()
    {
        $this->estudiante = Auth::guard('estudiante')->user();
    }

    public function guardarPuntaje()
    {
        dd($this->estudiante);
    }

    public function render()
    {
        return view('livewire.juego-a-sumar');
    }
}
