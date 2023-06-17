<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneos extends Model
{
    use HasFactory;
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'torneo_usuario', 'torneo_id', 'usuario_id');
    }

}
