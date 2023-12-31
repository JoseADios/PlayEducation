<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntuacion extends Model
{
    use HasFactory;

    public function juego()
    {
        return $this->belongsTo(Juego::class);
    }

    public function estudiantes()
    {
        return $this->belongsTo(Estudiante::class);
    }

}
