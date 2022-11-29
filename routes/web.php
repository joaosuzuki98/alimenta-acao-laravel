<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro-doador', function () {
    return view('cadastro-doador');
})->name('cadastro-doador');

Route::get('/cadastro-donatario', function () {
    return view('cadastro-donatario');
})->name('cadastro-donatario');

Route::get('/doador-anuncios', function() {
    return view('doador-anuncios');
})->name('doador-anuncios');

Route::get('/donatario-anuncios', function() {
    return view('donatario-anuncios');
})->name('donatario-anuncios');

Route::get('/perfil', function() {
    return view('perfil');
})->name('perfil');
