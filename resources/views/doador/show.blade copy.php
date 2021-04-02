@extends('template/template')

@section('title','Perfil doador')

@section('content')

<h1>Perfil doador</h1>

<form action="{{ route('doador.update', $doador->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" title="name" id="name" placeholder="Nome" value="{{ $doador->name ?? old('name') }}">
    </br>
    <input type="email" name="email" title="email" id="email" placeholder="Email" value="{{ $doador->email ?? old('email') }}">
    </br>
    <input type="password" name="password" title="password" id="password" placeholder="password" value="{{ $doador->password ?? old('password') }}">
    </br>
    <input type="text" name="cpf" title="cpf" id="cpf" placeholder="CPF" value="{{ $doador->cpf ?? old('cpf') }}">
    </br>
    <input type="text" name="localizacao" title="localizacao" id="localizacao" placeholder="Localização" value="{{ $doador->localizacao ?? old('localizacao') }}">
    </br>
    <button type="submit">Atualizar</button>
</form>

<form action="{{ route('doador.destroy',$doador->id) }}" method="post">
    @csrf
    @method("DELETE")
    <button type="submit">Deletar</button>
</form>

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
