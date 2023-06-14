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

Route::get('/torneo/creatorneo', [TorneosController::class, 'crearTorneo']);
Route::post('/torneo/creatorneo', [TorneosController::class, 'procesarFormulario']);
Route::get('/torneo/top10', [TorneosController::class, 'top10']);
Route::get('/', function () {
    return view('react');
});

Route::any('dashboard/{any?}', function () {
    return view('react');
});

require __DIR__.'/auth.php';
