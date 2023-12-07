<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grupo;

class Grupos extends Component
{
    public $grupos, $docente_id, $nombre, $grupo_id,
    $password_temp, $fecha_expiracion, $descripcion, $visiblePasswords;
    public $showPassword = false;
    public $modal = false;
    public $mensajeExito = '';
    public $mensajeError = '';



    public function crearGrupo()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function render()
    {

        $this->grupos = Grupo::where('docente_id', auth()->user()->id)->where('activo', true)->get();
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

    public function mostrarTodos()
    {
        $this->grupos = Grupo::where('docente_id', auth()->user()->id)->get();
    }

    public function reactivar($id)
    {
        $grupo = Grupo::find($id);
        $grupo->activo = true;
        $grupo->save();
    }

    public function desactivar($id)
    {
        $grupo = Grupo::find($id);
        $grupo->activo = false;
        $grupo->save();
    }

    public function mount()
    {

        $this->grupos = Grupo::where('docente_id', auth()->user()->id)->get();
        $this->initVisiblePasswords();
        $this->fecha_expiracion = now()->format('Y-m-d\TH:i:s');


    }

    public function initVisiblePasswords()
    {
        foreach ($this->grupos as $grupo) {
            $this->visiblePasswords[$grupo->id] = false;
        }
    }

    public function togglePasswordVisibility(){

        $this->showPassword = !$this->showPassword;

    }

    public function togglePassword($grupo_id)
    {
        $this->visiblePasswords[$grupo_id] = isset($this->visiblePasswords[$grupo_id]) ? !$this->visiblePasswords[$grupo_id] : true;
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->reset(['mensajeError', 'grupo_id', 'docente_id', 'nombre', 'password_temp', 'fecha_expiracion', 'descripcion']);
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
        $this->desactivar($id);    }

    public function guardar()
    {


        $this->validate([
            'nombre' => 'required|unique:grupos,nombre,NULL,id,docente_id,' . auth()->user()->id,
            'password_temp' => 'required',
            'fecha_expiracion' => 'required|date',

        ], [
            'nombre.required' => 'ya existe este nombre.',
            'password_temp.required' => 'El campo Contraseña Temporal es obligatorio.',
            'fecha_expiracion.required' => 'El campo Fecha de Expiración es obligatorio.',
            'fecha_expiracion.date' => 'El campo Fecha de Expiración debe ser una fecha válida.',

        ]);


        // Si la validación pasa, se procede a guardar en la base de datos
        Grupo::updateOrCreate([
            'id' => $this->grupo_id,
        ], [
            'docente_id' => auth()->user()->id,
            'nombre' => $this->nombre,
            'password_temp' => $this->password_temp,
            'fecha_expiracion' => $this->fecha_expiracion,
            'descripcion' => $this->descripcion,
        ]);

        $this->mensajeExito = '¡Grupo guardado exitosamente!';
        $this->cerrarModal();
        $this->limpiarCampos();

        // Después de 1.5 segundos, reinicia los mensajes
        $this->dispatchBrowserEvent('resetMensajes');
    }

}
