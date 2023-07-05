<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('crud.index');
});
Route::get('/inicio', function () {
    return view('crud.inicio');
});
Route::get('/dailyreward', function () {
    return view('crud.dailyreward');
});
Route::get('/login', function () {
    return view('crud.login');
});
Route::get('/mapa', function () {
    return view('crud.mapa');
});
Route::get('/pokedex', function () {
    return view('crud.pokedex');
});
// ruta miPefil
Route::get('/perfil', function () {
    return view('crud.miperfil');
});

Route::get('/registro', function () {
    return view('crud.registro');
});
