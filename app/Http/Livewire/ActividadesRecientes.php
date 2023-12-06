<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class ActividadesRecientes extends Component
{
    public $estudiante_id, $estudiante;

    public $actividades;

    public function mount()
    {
        $this->estudiante = Estudiante::find($this->estudiante_id);
        $this->actividades = $this->estudiante->puntuaciones()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.actividades-recientes');
    }
}
