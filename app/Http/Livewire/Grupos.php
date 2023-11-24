<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grupo;

class Grupos extends Component

{
    public $grupos, $docente_id, $nombre, $grupo_id ;
    public $modal = false;

    public function render() {
        $this->grupos = Grupo::all();
        return view('livewire.grupos');
    }

    public function crearGrupo() {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;

    }

    public function cerrarModal() {
        $this->modal = false;

    }

    public function limpiarCampos() {
        $this->docente_id = '';
        $this->nombre = '';

    }

    public function editar($id) {
        $grupo = Grupo::findOrFail($id);
        $this->docente_id = $grupo->docente_id;
        $this->nombre = $grupo->nombre;
        $this->abrirModal();

    }

    public function borrar($id) {
        Grupo::find($id)->delete();


    }

    public function guardar() {
        Grupo::updateOrCreate(['id'=>$this->grupo_id],
        [
            'docente_id' => $this->doncente_id,
            'nombre' => $this->nombre
        ]);

        $this->cerrarModal();
        $this->limpiarCampos();

    }
}

