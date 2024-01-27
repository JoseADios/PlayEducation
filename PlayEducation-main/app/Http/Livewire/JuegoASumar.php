<?php

namespace App\Http\Livewire;

use App\Models\Juego;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class JuegoASumar extends Component
{
    public $estudianteA, $juego, $prueba;

    protected $listeners = ['envioPuntuacion' => 'guardarPuntaje'];

    public function mount()
    {
        $this->prueba = false;
        $this->juego = Juego::where('nombre', 'A Sumar')->first();
        $this->estudianteA = Auth::guard('estudiante')->user();
    }

    public function guardarPuntaje($valor)
    {
        $this->prueba = true;
        // guardar puntuacion
        $this->estudianteA->puntuacions()->create([
            'juego_id' => $this->juego->id,
            'puntos' => $valor,
        ]);


    }

    public function render()
    {
        return view('livewire.juego-a-sumar');
    }
}
