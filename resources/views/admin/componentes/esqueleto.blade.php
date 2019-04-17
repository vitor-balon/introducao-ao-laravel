<!doctype html>
<html lang="en">
    <head>

        @include('admin.componentes.cabecalho')

        <title>@yield('titulodapagina')</title>

    </head>
    <body class="bg-light">
        
        @yield('corpodapagina')

        @include('admin.componentes.rodape')

    </body>
</html>