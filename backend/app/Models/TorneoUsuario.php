<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TorneoUsuario extends Model
{
    protected $table = 'torneo_usuario';
    // Aquí puedes definir otros atributos, como timestamps y campos fillable

    public function torneos()
    {
        return $this->belongsTo(Torneos::class);
    }

    public function usuarios()
    {
        return $this->belongsTo(Usuarios::class);
    }
}
