<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneos extends Model
{
    use HasFactory;

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'torneo_usuario', 'id_torneo', 'id_usu')
            ->withPivot('id_torneo', 'id_usu');
            }
}
