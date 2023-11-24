<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class Estudiantes extends Component
{
    public $grupos, $grupo_id, $nombre, $apellido, $usuario, $estudiante_id;
    public $modal = false;
    public $encabezadoModal = 'Crear Estudiante';

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
    }

    public function abrirMdlCrearEst()
    {
        $this->modal = true;
        $this->resetValidation();
    }

    public function cerrarMdlCrearEst()
    {
        $this->modal = false;
        $this->clearMdlCrearEst();
    }

    public function clearMdlCrearEst()
    {
        $this->encabezadoModal = 'Crear Estudiante';
        $this->estudiante_id = '';
        $this->grupo_id = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->usuario = '';
    }

    public function guardarEst()
    {
        $this->validate([
            'grupo_id' => 'required',
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'usuario' => 'required|email|unique:estudiantes,usuario,' . $this->estudiante_id . ',id',
        ]);

        Estudiante::updateOrCreate(['id' => $this->estudiante_id], [
            'grupo_id' => $this->grupo_id,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'usuario' => $this->usuario,
        ]);

        session()->flash(
            'message',
            $this->estudiante_id ? 'Estudiante actualizado correctamente' : 'Estudiante creado correctamente'
        );

        $this->clearMdlCrearEst();
        $this->cerrarMdlCrearEst();
    }

    public function editarEst($id)
    {
        $this->encabezadoModal = 'Editar Estudiante';

        $estudiante = Estudiante::findOrFail($id);

        $this->estudiante_id = $id;
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
