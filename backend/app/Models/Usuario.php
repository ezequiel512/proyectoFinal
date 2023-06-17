<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function torneos()
    {
        return $this->belongsToMany(Torneo::class, 'torneo_usuario', 'torneo_id', 'usuario_id');
    }
}
