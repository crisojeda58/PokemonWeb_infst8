<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('items', ItemController::class);
Route::resource('mapas', MapaController::class);
Route::resource('pokedexes', PokedexController::class);
Route::resource('usuarios', UsuarioController::class);
<<<<<<< Updated upstream
=======

Route::post('verificar-usuario', [RecompensaController::class, 'verificarUsuario']);
Route::post('guardar-recompensa/{id}', [RecompensaController::class, 'guardarRecompensa']);
Route::get('usuarios/{id}', [RecompensaController::class, 'obtenerRecompensaTotal']);

>>>>>>> Stashed changes
