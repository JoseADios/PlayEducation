<?php

namespace App\Http\Livewire;

use App\Models\Juego;
use App\Models\Puntuacion;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use function Psy\debug;

class JuegoASumar extends Component
{
    public $estudianteA, $juego;

    public function mount()
    {
        $this->juego = Juego::where('nombre', 'A Sumar')->first();
        $this->estudianteA = Auth::guard('estudiante')->user();
    }


    public function guardarPuntaje($puntos)
    {

        if ($this->estudianteA and $puntos) {

            // guardar puntuacion
            $this->estudianteA->puntuaciones()->create([
                'juego_id' => $this->juego->id,
                'puntos' => $puntos,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.juego-a-sumar');
    }
}
