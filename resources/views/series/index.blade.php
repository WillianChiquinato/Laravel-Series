<x-layout title="Séries">
    <div class="botao-add">
        <a href="{{ route('series.create') }}" class="botao-adicionar btn btn-dark mb-2">Adicionar</a>
    </div>

    <style>
        .st-tamanho {
            font-size: 10px;
        }

        #aceitar {
            width: 30px;
            height: 30px;
        }

        .botao-add {
            display: flex;
            justify-content: center;
        }

        .botao-adicionar {
            font-weight: 600;
        }

        .listas-de-series {
            color: black;
            font-size: 600;
            text-transform: uppercase;
        }
    </style>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="lista-series list-group">
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
</x-layout>