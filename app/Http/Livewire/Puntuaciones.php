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
        $this->puntuaciones = $this->estudiante->puntuaciones()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.puntuaciones');
    }
}
