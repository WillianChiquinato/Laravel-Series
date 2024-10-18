<x-layout title="Séries">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="botao-add">
        <a href="{{ route('series.create') }}" class="botao-adicionar btn btn-dark mb-2">Adicionar</a>
    </div>

    <style>
        .corvisual {
            background-color: black;
        }

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

        #searchForm {
            display: flex;
            justify-content: center;
        }

        .div-button {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .botao {
            font-weight: 700;
            font-size: 20px;
        }

        #results {
            display: flex;
            justify-content: center;
        }
    </style>

    <form id="searchForm" class="mb-2">
        <input type="text" id="search-input" name="query" placeholder="Buscar...">
        <button type="submit">🔍</button>
    </form>

    <div id="results"></div>

    <script>
        $(document).ready(function () {
            $('#searchForm').on('submit', function (event) {
                event.preventDefault(); // Previne o comportamento padrão do formulário

                let query = $('#search-input').val(); // Obtém o valor do campo de pesquisa

                $.ajax({
                    url: "{{ route('series.search') }}", // Certifique-se de que a rota está correta
                    method: "GET",
                    data: { query: query },
                    success: function (data) {
                        $('#results').html(data); // Atualiza o conteúdo do contêiner de resultados
                    }
                });
            });
        });
    </script>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

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
</x-layout>