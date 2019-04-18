@extends('admin.componentes.esqueleto')

@section('titulodapagina', 'Lista de Cursos')   
@section('textodobotao', 'Salvar')

@section('corpodapagina')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-5 text-uppercase">Editar Curso</h2>
                <form action="{{ route('admin.cursos.editar.post') }}" method="post">
                    @include('admin.curso.formulario')
                </form>                
            </div>
        </div>
    </div>
    
@endsection