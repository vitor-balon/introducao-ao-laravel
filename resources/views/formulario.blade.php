<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>

    <form action="/formulario" method="post">

        <!-- O MÉTODO ABAIXO É RESPOSÁVEL EM CRIAR UM INPUT HIDDEN COM O TOKEN DA PÁGINA -->
        <!-- SEM ESSE MÉTODO O FORMULÁRIO NÃO FUNCIONA -->
        {{ csrf_field() }}
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>