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
        <form method="POST" action="/doador/cadastro">
            @csrf
                <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
                <div><label for="email">Email</label><input type="text" name="email" id="email"></div>
                <div><label for="senha">Senha</label><input type="text" name="senha" id="senha"></div>
                <div><label for="endereco">Endereço</label><input type="text" name="endereco" id="endereco"></div>
                <div><label for="uf">UF</label><input type="text" name="uf" id="uf"></div>
                <div><label for="cpf">CPF</label><input type="text" name="cpf" id="cpf"></div>
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