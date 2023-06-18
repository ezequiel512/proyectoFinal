<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Usuarios extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $fillable = ['nombre_usuario', 'correo_electronico', 'contrasenya', 'rol'];

    protected $passwordName = 'contrasenya'; // Actualiza esta línea

    protected $primaryKey = 'id_usu';

    public function torneos()
    {
        return $this->belongsToMany(Torneos::class, 'torneo_usuario', 'id_usu', 'id_torneo');
    }
    public function getAuthIdentifierName()
    {
        return 'id_usu';
    }
}
