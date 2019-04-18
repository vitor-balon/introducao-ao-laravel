<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate(1);

        return view('admin/curso/index', compact('cursos'));
    }

    public function adicionar()
    {
        return view('admin.curso.adicionar');
    }

    public function adicionarPost(Request $request)
    {
        $dados = $request->all();

        if(!isset($dados['publicado']))
        {
            $dados['publicado'] = 0;
        }

        Curso::create($dados);
        return redirect()->route('admin.cursos');
    }

    public function editar($ID)
    {
        $curso = Curso::find($ID);

        return view('admin.curso.editar', compact('curso'));
    }

    public function editarPost(Request $request)
    {
        $dados = $request->all();

        if(!isset($dados['publicado']))
        {
            $dados['publicado'] = 0;
        }

        Curso::find($dados['id'])->update($dados);
        return redirect()->route('admin.cursos');
    }
    
    public function deletar($ID)
    {
        Curso::find($ID)->delete();
        return redirect()->route('admin.cursos');
    }
}
