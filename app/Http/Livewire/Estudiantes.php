<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class Estudiantes extends Component
{
    public $estudiantes;
    public $docente;


    public function mount()
    {
        $grupos = collect();

        $this->docente = auth()->user();

        // foreach ($this->docente->cursos as $curso) {
        //     // añade los grupos del curso a la colección de grupos
        //     $grupos = $grupos->concat($curso->grupos);

        // }
    }

    public function render()
    {
        return view('livewire.estudiantes');
    }
}
