<?php

namespace App\Http\Controllers;

use App\Models\Torneos;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\View;

class TorneosController extends Controller
{
    public function crearTorneo()
    {
        return view('torneo.creatorneo');
    }
    public function top10()
{
    $usuarios = Usuario::orderByDesc('n_victorias')->limit(10)->get();
    return View::make('top10')->with('usuarios', $usuarios);
}
    public function procesarFormulario(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required',
            'participantes' => 'required',
            'juego' => 'required',
            'tipo_torneo' => 'required|in:presencial,telematico',
            'ubicacion' => 'required_if:tipo_torneo,presencial',
            'descripcion' => ''
        ]);

        $t = new Torneos;
        $t->nombre_torneo = $validatedData['nombre'];
        $t->id_usu = 1;
        $t->num_participantes = $validatedData['participantes'];
        $t->juego = $validatedData['juego'];
        $t->presencial = $validatedData['tipo_torneo'];
        $t->ubicacion = $validatedData['ubicacion'];
        $t->descripcion = $validatedData['descripcion'];
        $t->save();

        // Aquí puedes realizar la lógica para procesar los datos del formulario
        // Acceder a los valores enviados por el formulario utilizando $request->input('nombre_del_campo')
        // Guardar en la base de datos, enviar correos electrónicos, etc.
        return '¡Formulario enviado correctamente!';
    }
}
