<?php

namespace App\Http\Livewire;

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

    public function crearEstudiante()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->grupo_id = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->usuario = '';
    }

}
