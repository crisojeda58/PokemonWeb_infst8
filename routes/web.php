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
<<<<<<< Updated upstream
=======
Route::get('/inicio', function () {
    return view('crud.inicio');
});
Route::get('/dailyreward', function () {
    return view('crud.dailyreward');
});
// http://test.test/crud/login  Esta es la ruta del login
Route::get('/login', function () {
    return view('crud.login');
});
Route::get('/mapa', function () {
    return view('crud.mapa');
});

>>>>>>> Stashed changes
