<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Escola</title>
        <style>
            label{
                float: left;
                display:block;
                width: 90px;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="/doador/atualizarPeloId/{{$doador->id}}">
            @method('PUT')
            @csrf
                <div><label for="nome">Nome</label><input type="text" name="nome" id="nome" value={{$doador->nome}}></div>
                <div><label for="email">Email</label><input type="text" name="email" id="email" value={{$doador->email}}></div>
                <div><label for="senha">Senha</label><input type="text" name="senha" id="senha" value={{$doador->senha}}></div>
                <div><label for="endereco">Endereço</label><input type="text" name="endereco" id="endereco" value={{$doador->endereco}}></div>
                <div><label for="uf">UF</label><input type="text" name="uf" id="uf" value={{$doador->uf}}></div>
                <div><label for="cpf">CPF</label><input type="text" name="cpf" id="cpf" value={{$doador->cpf}}></div>
                <button type="submit"> Salvar </button>
        </form>
    </body>
</html>