@extends('template/template')

@section('title','Perfil escola')

@section('content')

<h1>Perfil escola</h1>

<form action="{{ route('escola.update', $escola->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" title="name" id="name" placeholder="Nome" value="{{ $escola->name ?? old('name') }}">
    </br>
    <input type="email" name="email" title="email" id="email" placeholder="Email" value="{{ $escola->email ?? old('email') }}">
    </br>
    <input type="password" name="password" title="password" id="password" placeholder="password" value="{{ $escola->password ?? old('password') }}">
    </br>
    <input type="text" name="tipo" title="tipo" id="tipo" placeholder="Tipo" value="{{ $escola->tipo ?? old('tipo') }}">
    </br>
    <input type="text" name="localizacao" title="localizacao" id="localizacao" placeholder="Localização" value="{{ $escola->localizacao ?? old('localizacao') }}">
    </br>
    <input type="text" name="telefone" title="telefone" id="telefone" placeholder="telefone" value="{{ $escola->telefone ?? old('telefone') }}">
    </br>
    <button type="submit">Atualizar</button>
</form>

<form action="{{ route('escola.destroy',$escola->id) }}" method="post">
    @csrf
    @method("DELETE")
    <button type="submit">Deletar</button>
</form>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($escola->material as $material)
    <tr>
        <th scope="row">{{ $material->id }}</th>
        <td>{{ $material->name }}</td>
        <td>
            {{-- <a href="{{ route('escola.showMaterial',$material->id) }}">Ver/Editar</a> --}}
            <a href="#">Ver/Editar</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
</table>

<a class="btn btn-primary" href="{{ route('escola.cadastroMaterial') }}">Cadastrar Materiais</a>

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
