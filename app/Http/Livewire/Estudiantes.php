<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class Estudiantes extends Component
{
    public $grupos, $grupo_id, $nombre, $apellido, $usuario;
    public $modal = false;

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

    public function crearEst()
    {
        $this->clearMdlCrearEst();
        $this->abrirMdlCrearEst();
        $this->emit('eVcrearEst');
    }

    public function abrirMdlCrearEst()
    {
        $this->modal = true;
    }

    public function cerrarMdlCrearEst()
    {
        $this->modal = false;
    }

    public function clearMdlCrearEst()
    {
        $this->grupo_id = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->usuario = '';
    }

    public function guardarEst()
    {
        $this->cerrarMdlCrearEst();
    }

    public function editarEst($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $this->grupo_id = $estudiante->grupo_id;
        $this->nombre = $estudiante->nombre;
        $this->apellido = $estudiante->apellido;
        $this->usuario = $estudiante->usuario;
        $this->abrirMdlCrearEst();
    }

    public function eliminarEst($id)
    {
        Estudiante::find($id)->delete();
    }

}
