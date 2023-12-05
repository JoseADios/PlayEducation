<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;

class Dashboard extends Component
{

    public $docente;

    public $grupo_id, $grupos;

    public $cantidadGrupos, $cantidadEstudiantes, $cantidadPuntuaciones, $cantidadLogros, $cantidadObservaciones;
    public $avgCalificacionByMes;
    public $avgCalificacionByGrupo;

    public $prueba = true;

    public function pruebaToFalse()
    {
        $this->prueba = false;
        $this->emit('render');
    }

    public function pruebaToTrue()
    {
        $this->prueba = true;
        $this->emit('render');

    }


    public function mount()
    {
        $this->docente = auth()->user();
        $this->grupo_id = $this->docente->grupos->where('activo', 1)->first()->id;
        $this->grupos = $this->docente->grupos->where('activo', 1);
        $this->cargarDatos();
    }

    function cargarDatos()
    {
        $this->obtenerSumGrupos();
        $this->obtenerSumEstudiantes();
        $this->obtenerAvgCalsByGrupo();
        $this->obtenerCantidadPuntuaciones();
        $this->obtenerCantidadLogros();
        $this->obtenerCantidadObservaciones();
        $this->obtenerCalsByMes($this->grupo_id);
    }

    public function obtenerSumGrupos()
    {
        $this->cantidadGrupos = $this->docente->grupos->where('activo', 1)->count();
    }
    public function obtenerSumEstudiantes()
    {
        $this->cantidadEstudiantes = $this->docente->grupos->sum(function ($grupo) {
            return $grupo->estudiantes->where('activo', 1)->count();
        });
    }

    public function obtenerAvgCalsByGrupo()
    {
        $data = DB::table('users')
            ->join('grupos', 'users.id', '=', 'grupos.docente_id')
            ->join('estudiantes', 'grupos.id', '=', 'estudiantes.grupo_id')
            ->join('puntuacions', 'estudiantes.id', '=', 'puntuacions.estudiante_id')
            ->select('grupos.nombre', DB::raw('AVG(puntuacions.puntos) as avg_calificacion'))
            ->where('users.id', $this->docente->id)
            ->where('grupos.activo', 1)
            ->where('estudiantes.activo', 1)
            ->groupBy('grupos.id')
            ->get();

        $this->avgCalificacionByGrupo = $data;
        // return response()->json($data);
    }

    public function obtenerCantidadPuntuaciones()
    {
        $data = DB::table('users')
            ->join('grupos', 'users.id', '=', 'grupos.docente_id')
            ->join('estudiantes', 'grupos.id', '=', 'estudiantes.grupo_id')
            ->join('puntuacions', 'estudiantes.id', '=', 'puntuacions.estudiante_id')
            ->select(DB::raw('COUNT(puntuacions.puntos) as count'))
            ->where('users.id', $this->docente->id)
            ->where('grupos.activo', 1)
            ->where('estudiantes.activo', 1)
            ->groupBy('users.id')
            ->value('count');

        $this->cantidadPuntuaciones = $data;

    }

    public function obtenerCantidadLogros()
    {
        $data = DB::table('users')
            ->join('grupos', 'users.id', '=', 'grupos.docente_id')
            ->join('estudiantes', 'grupos.id', '=', 'estudiantes.grupo_id')
            ->join('estudiantes_logros', 'estudiantes.id', '=', 'estudiantes_logros.estudiante_id')
            ->select(DB::raw('COUNT(estudiantes_logros.id) as count'))
            ->where('users.id', $this->docente->id)
            ->where('grupos.activo', 1)
            ->where('estudiantes.activo', 1)
            ->groupBy('users.id')
            ->value('count');

        $this->cantidadLogros = $data;
    }

    public function obtenerCantidadObservaciones()
    {
        $data = DB::table('users')
            ->join('observacions', 'users.id', '=', 'observacions.docente_id')
            ->select(DB::raw('COUNT(observacions.id) as count'))
            ->where('users.id', $this->docente->id)
            ->where('observacions.activo', 1)
            ->groupBy('users.id')
            ->value('count');

        $this->cantidadObservaciones = $data;
    }

    public function obtenerCalsByMes($grupo_id)
    {
        $this->grupo_id = $grupo_id;

        $data = DB::table('users')
            ->join('grupos', 'users.id', '=', 'grupos.docente_id')
            ->join('estudiantes', 'grupos.id', '=', 'estudiantes.grupo_id')
            ->join('puntuacions', 'estudiantes.id', '=', 'puntuacions.estudiante_id')
            ->select(DB::raw('MONTH(puntuacions.created_at) as mes'), DB::raw('AVG(puntuacions.puntos) as avg_calificacion'))
            ->where('users.id', $this->docente->id)
            ->where('grupos.id', $this->grupo_id)
            ->where('grupos.activo', 1)
            ->where('estudiantes.activo', 1)
            ->groupBy('mes')
            ->get();

        $this->avgCalificacionByMes = $data;

    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
