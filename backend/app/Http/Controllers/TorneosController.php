<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TorneosController extends Controller
{
    public function crearTorneo()
    {
        return view('torneo.creatorneo');
    }

    public function procesarFormulario(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required',
            'participantes' => 'required',
            'videojuego' => 'required',
            'tipo_torneo' => 'required|in:presencial,telematico',
            'ubicacion' => 'required_if:tipo_torneo,presencial',
        ]);

        // Aquí puedes realizar la lógica para procesar los datos del formulario
        // Acceder a los valores enviados por el formulario utilizando $request->input('nombre_del_campo')
        // Guardar en la base de datos, enviar correos electrónicos, etc.

        return '¡Formulario enviado correctamente!';
    }
}
