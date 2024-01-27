<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class Logros extends Component
{
    public $estudiante, $estudiante_id;

    public $logros;

    public function mount()
    {
        $this->estudiante = Estudiante::findorfail($this->estudiante_id);

        $this->logros = $this->estudiante->logros;
    }

    public function render()
    {
        return view('livewire.logros');
    }
}
