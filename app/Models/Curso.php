<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }

    public function centroEducativo()
    {
        return $this->belongsTo(CentroEducativo::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class,'docente_id');
    }
}
