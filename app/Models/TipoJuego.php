<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoJuego extends Model
{
    use HasFactory;

    public function juegos()
    {
        return $this->hasMany(Juego::class);

    }

}
