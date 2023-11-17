<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    public function tipo_juego()
    {
        return $this->belongsTo(TipoJuego::class);
    }
}

