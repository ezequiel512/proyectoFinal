<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Usuarios extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;

    protected $fillable = ['nombre_usuario', 'correo_electronico', 'contrasenya', 'rol'];

    protected $primaryKey = 'id_usu';

    public function torneos()
    {
        return $this->belongsToMany(Torneos::class, 'torneo_usuario', 'id_usu', 'id_torneo');
    }

}
