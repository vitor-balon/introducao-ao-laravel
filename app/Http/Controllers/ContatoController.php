<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        return 'Método Index!';
    }

    public function formularioController()
    {
        return view('formulariocontroller');
    }

    public function formularioPostController(Request $request)
    {
        dd($request->all());
    }

    public function main()
    {
        $contatos = array(
            array('nome' => 'Maria', 'tel' => '123456789'),
            array('nome' => 'João', 'tel' => '987654321'),
        );

        return view('contato/index', compact('contatos'));
    }

    public function listarContatos()
    {
        $contato = new Contato();

        dd($contato->listar());
    }
}