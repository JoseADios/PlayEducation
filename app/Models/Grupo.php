<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre',];


    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    public function cursos()
    {
        return $this->belongsTo(Curso::class);
    }
}
