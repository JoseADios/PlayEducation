<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class Estudiantes extends Component
{
    public $grupos, $estudiante_id, $grupo_id, $nombre, $apellido, $usuario, $genero, $observaciones;

    public $modalCrearEst = false;
    public $modalEditarEst = false;

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
        $this->modalCrearEst = true;
        $this->modalEditarEst = false;
        $this->resetValidation();
    }

    public function cerrarMdlCrearEst()
    {
        $this->modalCrearEst = false;
        $this->clearMdlCrearEst();
    }

    public function clearMdlCrearEst()
    {
        $this->estudiante_id = '';
        $this->grupo_id = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->usuario = '';
        $this->genero = '';
        $this->observaciones = '';
    }

    public function guardarEst()
    {
        $this->validate([
            'grupo_id' => 'required',
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'genero' => 'max:1 | required',
            'usuario' => 'required|email|unique:estudiantes,usuario,' . $this->estudiante_id . ',id',
        ]);

        Estudiante::updateOrCreate(['id' => $this->estudiante_id], [
            'grupo_id' => $this->grupo_id,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'usuario' => $this->usuario,
            'genero' => $this->genero,
        ]);

        session()->flash(
            'message',
            $this->estudiante_id ? 'Estudiante actualizado exitosamente' : 'Estudiante creado exitosamente'
        );

        $this->clearMdlCrearEst();
        $this->cerrarMdlCrearEst();
    }

    // Editar Estudiante

    public function abrirMdlEditarEst()
    {
        $this->modalEditarEst = true;
        $this->modalCrearEst = false;
        $this->resetValidation();
    }

    public function editarEst($id)
    {
        $estudiante = Estudiante::findOrFail($id);

        $this->getObservaciones($estudiante);

        $this->estudiante_id = $id;
        $this->grupo_id = $estudiante->grupo_id;
        $this->nombre = $estudiante->nombre;
        $this->apellido = $estudiante->apellido;
        $this->usuario = $estudiante->usuario;
        $this->genero = $estudiante->genero;

        $this->abrirMdlEditarEst();
    }

    public function cerrarMdlEditarEst()
    {
        $this->modalEditarEst = false;
        $this->clearMdlCrearEst();
    }

    public function getObservaciones($estudiante) {
        $this->observaciones = $estudiante->observaciones()->orderBy('created_at', 'desc')->get();
    }

    // Eliminar Estudiante

    public function eliminarEst($id)
    {
        // Estudiante::find($id)->delete();
        Estudiante::find($id)->update(['activo' => 0]);
        session()->flash('message', 'Estudiante eliminado exitosamente');
    }

}
