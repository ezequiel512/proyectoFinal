<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorneosController;

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

/*TORNEOS*/
Route::get('/torneos/creatorneo', [TorneosController::class, 'crearTorneo']);
Route::post('/torneos/creatorneo', [TorneosController::class, 'procesarFormularioCreacion']);
Route::get('/torneos', [TorneosController::class, 'index']);

Route::get('torneo/editatorneo/{id}', [TorneosController::class, 'editarTorneo']);
Route::put('torneo/editatorneo/{id}', [TorneosController::class, 'procesarFormularioEdicion']);

Route::get('torneo/muestratorneo/{id}', [TorneosController::class, 'mostrarTorneo']);

Route::get('/ganadores', [TorneosController::class, 'top10']);

Route::get('/', function () {
    return view('react');
});

Route::any('dashboard/{any?}', function () {
    return view('react');
});

require __DIR__.'/auth.php';
