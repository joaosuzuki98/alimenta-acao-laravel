<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;

class Anuncios_controller extends Controller
{
    public function gravar(Request $request) {
        $anuncio = new Anuncio;

        $anuncio->id_user = auth()->user()->id;
        $anuncio->titulo = $request->titulo;
        $anuncio->descricao = $request->descricao;
        $anuncio->num_donatarios = $request->num_donatarios;
        $anuncio->num_donatarios_instituicoes = $request->num_donatarios_instituicoes;
        $anuncio->concluido = 0;
        $anuncio->foto = $request->foto;

        $anuncio->save();

        return redirect('anuncios');
    }
}
