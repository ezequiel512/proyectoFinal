<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuarios;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\LoginRequest;

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

    public function login(LoginRequest $data)
    {
        $data->authenticate();

        $data->session()->regenerate();

        return response()->noContent();
    }

    protected function registro(Request $data)
    {

        $data->validate([
            'nombre_usuario' => ['required', 'string', 'max:255'],
            'correo_electronico' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'contrasenya' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' => ['required', Rule::in(['creador', 'participante', 'ambos'])],
        ]);
        $usuario = Usuarios::create([
            'nombre_usuario' => $data['nombre_usuario'],
            'correo_electronico' => $data['correo_electronico'],
            'contrasenya' => Hash::make($data['contrasenya']),
            'rol' => $data['rol'],
        ]);

        event(new Registered($usuario));

        Auth::login($usuario);

        return redirect('/torneos');
    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/'); // Cambia la ruta según tus necesidades
    }
    protected function authenticated(Request $request, $user)
    {
        // Personaliza esta función según tus necesidades
        // Por ejemplo, redirige al usuario a una página específica después de iniciar sesión
        return redirect('/torneos');
    }
}
