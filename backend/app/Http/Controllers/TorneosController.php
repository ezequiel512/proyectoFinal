<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TorneosController as ControllersTorneosController;
use App\Models\Torneos;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\View;

class TorneosController extends Controller
{
    public function index()
    {
        $torneos = Torneos::all();
        return view('torneo.index', compact('torneos'));
    }

    public function top10()
    {
        $usuarios = Usuario::orderByDesc('n_victorias')->limit(10)->get();
        return View::make('torneo.top10')->with('usuarios', $usuarios);
    }

    public function crearTorneo()
    {
        return view('torneo.creatorneo');
    }

    public function procesarFormularioCreacion(Request $request)
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

        return redirect()->action([ControllersTorneosController::class, 'index']);
    }

    public function editarTorneo($id)
    {
        $torneo = Torneos::findOrFail($id);
        return view('torneo.editatorneo', compact('torneo'));
    }

    public function procesarFormularioEdicion(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'participantes' => 'required',
            'juego' => 'required',
            'tipo_torneo' => 'required|in:presencial,telematico',
            'ubicacion' => 'required_if:tipo_torneo,presencial',
            'descripcion' => ''
        ]);

        $torneo = Torneos::findOrFail($id);
        $torneo->nombre_torneo = $validatedData['nombre'];
        $torneo->num_participantes = $validatedData['participantes'];
        $torneo->juego = $validatedData['juego'];
        $torneo->presencial = $validatedData['tipo_torneo'];
        $torneo->ubicacion = $validatedData['ubicacion'];
        $torneo->descripcion = $validatedData['descripcion'];
        $torneo->save();

        return redirect()->action([ControllersTorneosController::class, 'index']);
    }

    public function mostrarTorneo($id)
    {
        $torneo = Torneos::findOrFail($id);
        return view('torneo.muestratorneo', compact('torneo'));
    }

    public function borrarTorneo($id)
    {
        $torneo = Torneos::findOrFail($id);
        $torneo->delete();

        return redirect()->action([ControllersTorneosController::class, 'index']);
    }
}
