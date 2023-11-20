<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Estudiantes extends Component
{
    public $grupos;

    public $docente;

    public function mount()
    {

        $this->docente = auth()->user();

        $this->grupos = $this->docente->grupos;

    }

    public function render()
    {
        return view('livewire.estudiantes');
    }
}
