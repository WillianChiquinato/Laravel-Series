<x-layout title="Nova Série">

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

        .escrita-titulos {
            font-weight: 700;
            color: rgb(185, 185, 6);
        }
    </style>

    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="escrita-titulos form-label">Nome:</label>
                <input type="text" autofocus id="nome" name="nome" class="form-control" value="{{ old('nome') }}">
            </div>

            <div class="col-2">
                <label for="seasonsQty" class="escrita-titulos form-label">Nº Temporadas:</label>
                <input type="text" id="seasonsQty" name="seasonsQty" class="form-control"
                    value="{{ old('seasonsQty') }}">
            </div>

            <div class="col-2">
                <label for="episodesPerSeason" class="escrita-titulos form-label">Eps / Temporada:</label>
                <input type="text" id="episodesPerSeason" name="episodesPerSeason" class="form-control"
                    value="{{ old('episodesPerSeason') }}">
            </div>
        </div>

        <div class="div-button">
            <button type="submit" class="botao btn btn-primary">Adicionar</button>
        </div>
    </form>
</x-layout>