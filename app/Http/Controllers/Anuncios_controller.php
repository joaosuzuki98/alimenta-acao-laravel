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

    public function get_anuncios_by_user() {
        $id_user = auth()->user()->id;
        // Carrega registros onde o tipo é igual a receita e user_id é igual a variável $user_id
        $anuncios_ativos = Anuncio::where('id_user', $id_user)->where('concluido', 0)->get();
        $anuncios_desativados = Anuncio::where('id_user', $id_user)->where('concluido', 1)->get();

        //Carrega a VIEW extrato enviando as variáveis $despesas e $receitas
        return view('anuncios', [
            'anuncios_ativos' => $anuncios_ativos,
            'anuncios_desativados' => $anuncios_desativados, 
        ]);
    }

    public function deletar($id) {
        Anuncio::findOrFail($id)->delete();

        return redirect('anuncios');
    }

    public function get_anuncio($id) {
        $anuncio_edicao = Anuncio::findOrFail($id);

        $id_user = auth()->user()->id;
        // Carrega registros onde o tipo é igual a receita e user_id é igual a variável $user_id
        $anuncios_ativos = Anuncio::where('id_user', $id_user)->where('concluido', 0)->get();
        $anuncios_desativados = Anuncio::where('id_user', $id_user)->where('concluido', 1)->get();

        //Carrega a VIEW extrato enviando as variáveis $despesas e $receitas
        $parametros =  [
            'anuncios_ativos' => $anuncios_ativos,
            'anuncios_desativados' => $anuncios_desativados, 
            'anuncio_edicao' => $anuncio_edicao
        ];


        return view('anuncios', $parametros);
    }

    public function atualizar(Request $request) {
        Anuncio::findOrFail($request->id)->update($request->all());

        return redirect('anuncios');
    }

    public function atualizar_concluido(Request $request) {
        // Anuncio::findOrFail($request->id)->update($request->concluido);
        Anuncio::where('id', $request->id)->update(array('concluido' => 1));

        return redirect('anuncios');
    }
}
