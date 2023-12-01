<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ObservacionController;
use App\Models\Estudiante;
use App\Models\Observacion;
use Livewire\Component;

class Estudiantes extends Component
{
    public $grupos, $grupo_id, $estudiante_id, $nombre, $apellido, $usuario, $genero;

    public $observaciones, $observacion_id, $titulo, $descripcion;

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
        $this->observacion_id = '';
        $this->titulo = '';
        $this->descripcion = '';
    }

    public function guardarEst()
    {
        $this->validate([
            'grupo_id' => 'required|integer',
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'usuario' => 'required|email|unique:estudiantes,usuario,' . $this->estudiante_id . ',id',
        ]);

        if ($this->genero == 'null') {
            $this->genero = null;
        }

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
        $this->cerrarMdlEditarEst();

        // recargar la vista nuevamente
        $this->mount();
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

        $this->observaciones = $this->getObservaciones($estudiante);

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

    // Eliminar Estudiante

    public function eliminarEst($id)
    {
        // Estudiante::find($id)->delete();
        Estudiante::find($id)->update(['activo' => 0]);
        session()->flash('message', 'Estudiante eliminado exitosamente');

        $this->emit('estudianteEliminado');
        $this->mount();
    }

    // Observaciones

    public function getObservaciones($estudiante)
    {
        return $estudiante->observaciones()->get();
    }

    public function clearObservaciones()
    {
        $this->observacion_id = '';
        $this->titulo = '';
        $this->descripcion = '';
    }

    public function guardarObservacion()
    {
        $this->resetValidation();

        $this->validate([
            'titulo' => 'required|min:3',
            'descripcion' => 'required|min:3',
        ]);

        $estudiante = Estudiante::findOrFail($this->estudiante_id);

        $estudiante->observaciones()->create([
            'docente_id' => $this->docente->id,
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
        ]);

        $this->observaciones = $this->getObservaciones($estudiante);

        $this->clearObservaciones();

    }

}
