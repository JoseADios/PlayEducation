<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class Puntuaciones extends Component
{
    public $estudiante_id, $estudiante;
    public $puntuaciones;

    public function mount()
    {
        $this->estudiante = Estudiante::find($this->estudiante_id);
        // ordenadas por fecha de creacion solo las primeras 30
        $this->puntuaciones = $this->estudiante->puntuaciones->sortByDesc('created_at')->take(30);
    }

    public function render()
    {
        return view('livewire.puntuaciones');
    }
}
