<x-layout title="Temporadas de {!! $series->nome !!}">

    <style>
        .div-button {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .botao {
            font-weight: 700;
            font-size: 20px;
        }
    </style>

    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Temporada {{ $season->number }}

                <span class="badge bg-secondary">
                    {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>

    <div class="div-button">
        <a href="{{ route('series.index') }}" class="botao btn btn-dark mt-4">Voltar</a>
    </div>
</x-layout>