<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();

        return view('admin/curso/index', compact('cursos'));
    }

    public function adicionar()
    {
        return view('admin.curso.adicionar');
    }
}
