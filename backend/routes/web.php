<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorneosController;
use App\Http\Controllers\PerfilController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LOGIN

//Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.post');

//Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::get('/registro', [AuthController::class, 'showRegistrationForm']);
Route::post('/registro', [AuthController::class, 'registro'])->name('registro');

Route::post('logout', [AuthController::class, 'destroy'])->name('logout');

/*TORNEOS*/

Route::get('/torneos/creatorneo', [TorneosController::class, 'crearTorneo']);
Route::post('/torneos/creatorneo', [TorneosController::class, 'procesarFormularioCreacion']);

Route::get('/torneos', [TorneosController::class, 'index']);

Route::get('/torneos/editatorneo/{id}', [TorneosController::class, 'editarTorneo']);
Route::put('/torneos/editatorneo/{id}', [TorneosController::class, 'procesarFormularioEdicion']);

Route::get('/torneos/muestratorneo/{id}', [TorneosController::class, 'mostrarTorneo']);

Route::get('/torneos/deletetorneo/{id}', [TorneosController::class, 'borrarTorneo']);

Route::get('/ganadores', [TorneosController::class, 'top10']);

Route::post('/torneos/inscribir/{id}', [TorneosController::class, 'registrarUsuarioTorneo']);

Route::get('/perfil/{id_usu}', [PerfilController::class, 'show']);

route::get('/nosotros', function () {
    return view('torneo/nosotros');
});

Route::get('/', function () {
    return view('react');
});

Route::any('dashboard/{any?}', function () {
    return view('react');
});

require __DIR__ . '/auth.php';
