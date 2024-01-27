<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    public function puntuaciones()
    {
        return $this->hasMany(Puntuacion::class);
    }

    public function logros()
    {
        return $this->hasMany(Logro::class);
    }

    public function tipos_juegos()
    {
        return $this->belongsTo(TipoJuego::class);
    }

}

