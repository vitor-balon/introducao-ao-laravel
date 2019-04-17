@extends('contato.componentes.site')

@section('tituloDaPagina', 'Contatos')

@section('conteudo')

        <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="mt-5 mb-4">
                            <h1 class="mt-5">Olá Mundo!</h1>
                            @include('contato.inclusao.inclusao')
                        </div>

                        <table class="table border table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th style="width: 10px;"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($contatos as $contato)
                                    <tr>
                                        <th scope="row">{{ $contato['nome'] }}</th>
                                        <td>{{ $contato['tel'] }}</td>
                                        <td><a href="" class="btn btn-primary">Editar</a></td>
                                    </tr>                            
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
    </html>    
@endsection

