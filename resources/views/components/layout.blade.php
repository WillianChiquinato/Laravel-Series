<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<!-- Layout PADRÃO: Utilizado em quase todas as telas instanciando ele no começo, criei essa parte para facilitar e nao repetir codigo, com a configuração de "Errors", pois vai ser referenciado em todas as telas, estilização mais superficial para futuras evoluções -->
<body>
    <style>
        body {
            background-color: #2e004f;
            font-family: "Prompt", sans-serif;
        }

        .container {
            background: linear-gradient(to bottom, #800080, #FF1493);
            border: solid 2px black;
            border-radius: 10px;
            margin-top: 10%;
            padding: 40px 20px;
        }

        .titulo-tudo {
            color: whitesmoke;
            font-weight: bold;
            font-size: 50px;
            border-bottom: solid 1px black;
        }
    </style>

    <div class="container">
        <h1 class="titulo-tudo d-flex justify-content-center">{{ $title }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{ $slot }}
    </div>
</body>

</html>