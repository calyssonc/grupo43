<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Material</title>
        <style>
            label{
                float: left;
                display:block;
                width: 90px;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="/material/cadastro">
            @csrf
                <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
                <div style="display:none"><label for="escola_id">escola_id</label><input name="escola_id" id="escola_id" value={{$idEscola}}></div>
                <button type="submit"> Salvar </button>
        </form>
    </body>
</html>