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
        /* //var_dump($request);
        if ($_POST){
            echo "POST";
            $teste = json_decode($request->getContent(), true);
            var_dump($request);
        }
        else {
            echo "Error";
        }die(); */
        $usuario = new Usuario();

        $usuario = $usuario->create($request->all());

        return $usuario;
    }
}
