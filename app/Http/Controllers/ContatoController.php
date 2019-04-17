<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
