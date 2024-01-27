<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'estudiante_id',
        'user_id',
        'docente_id',
    ];

    public function estudiantes()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
