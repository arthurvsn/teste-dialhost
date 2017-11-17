<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        echo "Hello Controller";
    }
    public function salvar(Request $request){
        var_dump($request);
        /* $usuario = new Usuario();

        $usuario = $usuario->create([$request->all()]);

        return $usuario;            */
    }
}
