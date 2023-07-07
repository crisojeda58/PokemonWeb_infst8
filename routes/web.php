<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'LoginController@login')->name('login');

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
Route::get('/ruleta', function () {
    return view('crud.ruleta');
});
Route::get('/pokedex', function () {
    return view('crud.pokedex');
});
Route::get('/perfil', function () {
    return view('crud.miperfil');
});
Route::get('/registro', function () {
    return view('crud.registro');
});
Route::get('/editarPerfil', function () {
    return view('crud.editProfile');
});
Route::get('/inventario', function () {
    return view('crud.inventario');
});

