<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('autenticacion.login');
    }

    public function showRegistrationForm()
    {
        return view('autenticacion.registro');
    }

    protected function registro(Request $data){

        $data->validate([
            'nombre_usuario' => ['required', 'string', 'max:255'],
            'correo_electronico' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contrasenya' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' => ['required', Rule::in(['creador', 'participante', 'ambos'])],
        ]);
        $usuario = Usuario::create([
            'nombre_usuario' => $data['nombre_usuario'],
            'correo_electronico' => $data['correo_electronico'],
            'contrasenya' => Hash::make($data['contrasenya']),
            'rol' => $data['rol'],
        ]);

        event(new Registered($usuario));

        Auth::login($usuario);

        return response()->noContent();
    }

    protected function authenticated(Request $request, $user)
    {
        // Personaliza esta función según tus necesidades
        // Por ejemplo, redirige al usuario a una página específica después de iniciar sesión
        return redirect('/torneos');
    }
}
