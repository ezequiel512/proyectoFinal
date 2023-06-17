<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_usu';

    public function torneos()
    {
        return $this->belongsToMany(Torneos::class, 'torneo_usuario', 'id_usu', 'id_torneo');
    }

}
