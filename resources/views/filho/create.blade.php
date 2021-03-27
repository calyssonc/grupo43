<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Filho</title>
        <style>
            label{
                float: left;
                display:block;
                width: 90px;
            }
        </style>
    </head>
    <body>
        <form>
            @csrf
                <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
                <div><label for="RA">RA</label><input type="text" name="RA" id="RA"></div>
                <button type="submit"> Salvar </button>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        </form>
    </body>
</html>