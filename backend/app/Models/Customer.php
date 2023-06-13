<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'Nombre',
        'Apellido',
        'tlf',
        'ciudad',
        'pais'
    ];

    /**
     * Devuelve el usuario asociado a un customer.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Devuelve los order de un customer determinado.
     */
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
}
