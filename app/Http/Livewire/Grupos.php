<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grupo;

class Grupos extends Component
{
    public $grupos, $docente_id, $nombre, $grupo_id, $password_temp, $fecha_expiracion, $descripcion;
    public $modal = false; 

    public function crearGrupo()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function render()
    {
        $this->grupos = Grupo::where('docente_id', auth()->user()->id)->get();
        return view('livewire.grupos');
    }

    public function editarGrupo($id)
    {
        $grupo = Grupo::find($id);
        $this->grupo_id = $grupo->id;
        $this->docente_id = $grupo->docente_id;
        $this->nombre = $grupo->nombre;
        $this->password_temp = $grupo->password_temp;
        $this->fecha_expiracion = $grupo->fecha_expiracion;
        $this->descripcion = $grupo->descripcion;

        $this->abrirModal();
    }
    public $showPassword = false;

    public function togglePasswordVisibility(){

        $this->showPassword = !$this->showPassword;

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
        $this->docente_id = '';
        $this->nombre = '';
        $this->password_temp = '';
        $this->fecha_expiracion = '';
        $this->descripcion = '';
    }


    public function borrar($id)
    {
        Grupo::find($id)->delete();
    }

    public function guardar()
    {
        Grupo::updateOrCreate(['id' => $this->grupo_id],
            [
                'docente_id' => auth()->user()->id,
                'nombre' => $this->nombre,
                'password_temp' => $this->password_temp,
                'fecha_expiracion' => $this->fecha_expiracion,
                'descripcion' => $this->descripcion,
            ]
        );

        $this->cerrarModal();
        $this->limpiarCampos();
    }

}
