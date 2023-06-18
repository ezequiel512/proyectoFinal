<?php

namespace App\Http\Controllers;

use App\Models\Usuarios; // Asegúrate de importar el modelo Usuario o ajustar el namespace según tu aplicación
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function show($id_usu)
    {
        $usuario = Usuarios::find($id_usu); // Ajusta el nombre del modelo Usuario y la columna correspondiente a tu tabla de usuarios

        return view('perfil', compact('usuario'));
    }
}
