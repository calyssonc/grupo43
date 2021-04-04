@extends('template/template')

@section('title','Perfil beneficiado')

@section('content')

<h1>Perfil beneficiado</h1>

<form action="{{ route('beneficiado.update', $beneficiado->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" title="name" id="name" placeholder="Nome" value="{{ $beneficiado->name ?? old('name') }}">
    </br>
    <input type="email" name="email" title="email" id="email" placeholder="Email" value="{{ $beneficiado->email ?? old('email') }}">
    </br>
    <input type="password" name="password" title="password" id="password" placeholder="password" value="{{ $beneficiado->password ?? old('password') }}">
    </br>
    <input type="text" name="cpf" title="cpf" id="cpf" placeholder="CPF" value="{{ $beneficiado->cpf ?? old('cpf') }}">
    </br>
    <input type="number" name="telefone" title="telefone" id="telefone" placeholder="Telefone" value="{{ $beneficiado->telefone ?? old('telefone') }}">
    </br>
    <input type="text" name="localizacao" title="localizacao" id="localizacao" placeholder="Localização" value="{{ $beneficiado->localizacao ?? old('localizacao') }}">
    </br>
    <button type="submit">Atualizar</button>
</form>

<form action="{{ route('beneficiado.destroy',$beneficiado->id) }}" method="post">
    @csrf
    @method("DELETE")
    <button type="submit">Deletar</button>
</form>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">RA</th>
            <th scope="col">Escola</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($beneficiado->filho as $filho)
    <tr>
        <th scope="row">{{ $filho->id }}</th>
        <td>{{ $filho->name }}</td>
        <td>{{ $filho->ra }}</td>
        <td>{{ $filho->escola->name }}</td>
        <td>
            <a href="{{ route('filho.show',$filho->id) }}">Ver/Editar</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">RA</th>
            <th scope="col">Escola</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
</table>

    <a class="btn btn-primary" href="{{ route('filho.cadastro',$beneficiado->id) }}">Cadastrar Filho</a>

<style>
    h2{
        margin-top:35px;
    }
    h1{
        margin-top: 25px;
    }
    input{
        margin: 10px;
    }
    button{
        margin: 10px;
    }
</style>

@endsection
