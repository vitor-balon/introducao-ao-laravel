@extends('admin.componentes.esqueleto')

@section('titulodapagina', 'Lista de Cursos')   

@section('corpodapagina')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-5 text-uppercase">Lista de Cursos</h2>
                <a href="{{ route('admin.cursos.adicionar') }}" class="btn btn-secondary mb-2 mt-3">Adicionar</a>
                <table class="table table-bordered bg-white">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Valor</th>
                        <th scope="col" style="width: 100px;"></th>
                        <th scope="col" style="width: 100px;"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($cursos as $curso)
                            <tr>
                                <th scope="row">{{ $curso['id'] }}</th>
                                <td>{{ $curso['titulo'] }}</td>
                                <td>{{ $curso['valor'] }}</td>
                                <td>
                                    <a href="{{ route('admin.cursos.editar', $curso['id']) }}" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.cursos.deletar', $curso['id']) }}" class="btn btn-danger">Deletar</a>
                                </td>
                            </tr>                            
                        @endforeach

                    </tbody>
                </table>

                {{ $cursos->links() }}

            </div>
        </div>
    </div>
    
@endsection