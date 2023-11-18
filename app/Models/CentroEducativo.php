<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroEducativo extends Model
{
    use HasFactory;

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }
}
