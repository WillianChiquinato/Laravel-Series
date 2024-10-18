<form action="{{ $action }}" method="post">
    @csrf

    <style>
        .escrita-titulos {
            font-weight: 700;
            color: rgb(185, 185, 6);
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
    </style>

    @if($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label for="nome" class="escrita-titulos form-label">Nome:</label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control"
               placeholder="Digite o novo nome da serie..."
               @isset($nome)value="{{ $nome }}"@endisset>
    </div>

    <div class="div-button">
        <button type="submit" class="botao btn btn-primary">Adicionar</button>
    </div>
</form>
