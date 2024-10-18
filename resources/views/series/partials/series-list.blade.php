<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Tive que fazer uma pagina sem o layout para a exibição da pesquisa, pois no layout tem configurações que nao desejo nesse momento -->

    <style>
        .alert {
            text-align: center;
            width: 360px;
        }
    </style>

    @if(isset($query))
        <div class="alert alert-info">
            <p>Você pesquisou por: <strong>{{ $query }}</strong></p>

            <ul class="lista-series list-group" id="series-list">
                @foreach ($series as $serie)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('seasons.index', $serie->id) }}" class="listas-de-series">
                            {{ $serie->nome }}
                        </a>

                        <span class="d-flex">
                            <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2 mr-2">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    Delet
                                </button>
                            </form>

                            <input type="checkbox" id="aceitar" name="aceitar" value="sim" class="ms-2">
                        </span>
                    </li>
                @endforeach
            </ul>
            @if($series->isEmpty())
                <p>Nenhuma série encontrada.</p>
            @endif
        </div>
    @endif
</body>

</html>