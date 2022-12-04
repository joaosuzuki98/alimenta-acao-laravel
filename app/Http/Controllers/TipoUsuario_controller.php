<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TipoUsuario_controller extends Controller
{
    public function gravar(Request $request) {
        $usuario = new User;

        $usuario->tipo = $request->tipo;

        $usuario->save();

        return redirect('register');
    }
}
