<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'docente_id','password_temp','fecha_expiracion','descripcion'];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'docente_id');

    }

}


