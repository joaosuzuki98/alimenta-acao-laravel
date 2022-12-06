<?php

use App\Http\Controllers\Anuncios_controller;
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
})->name('/');

Route::get('/cadastro-doador', function () {
    return view('cadastro-doador');
})->name('cadastro-doador');

Route::get('/cadastro-donatario', function () {
    return view('cadastro-donatario');
})->name('cadastro-donatario');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
        
    Route::get('/perfil', function() {
        return view('perfil');
    })->name('perfil');

    Route::post('/salva_anuncio', [Anuncios_controller::class, 'gravar'])->name('salva_anuncio');

    Route::get('/anuncios', [Anuncios_controller::class, 'get_anuncios_by_user'])->name('anuncios');

    Route::delete('/deletar/{id}', [Anuncios_controller::class, 'deletar'])->name('deletar');

    Route::get('/editar/{id}', [Anuncios_controller::class, 'get_anuncio'])->name('editar');
    Route::put('/atualiza', [Anuncios_controller::class, 'atualizar'])->name('atualiza');

    Route::put('/atualiza_concluido', [Anuncios_controller::class, 'atualizar_concluido'])->name('atualiza_concluido');
});
