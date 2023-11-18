<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

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
