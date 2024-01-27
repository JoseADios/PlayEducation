<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estudiante extends Authenticatable
{
    use HasFactory;

    protected $guard = 'estudiante';

    protected $fillable = [
        'grupo_id',
        'nombre',
        'apellido',
        'usuario',
        'activo',
        'genero',
    ];

    protected $hidden = [
        'password', // Oculta la contraseña en las respuestas JSON
    ];

    public function observaciones()
    {
        return $this->hasMany(Observacion::class);
    }

    public function grupos()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function puntuaciones()
    {
        return $this->hasMany(Puntuacion::class);
    }

    public function logros()
    {
        return $this->belongsToMany(Logro::class, 'estudiantes_logros');
    }

}
