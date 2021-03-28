@extends('template/template')

@section('title','Escola Index')

@section('content')

<h1>Escola Index</h1>

@if (session('message'))

<div class="alert alert-dismissible alert-primary">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Mensagem:</strong> {{ session('message') }}
</div>

@endif

<div>

<h2>Escolas</h2>

<form action="{{ route('escola.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar:">
    <button type="submit">Pesquisar</button>
</form>

<table class="table table-hover">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Localização</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
<tbody>
@foreach ($escolas as $escola)
<tr>
    <th scope="row">{{ $escola->id }}</th>
    <td>{{ $escola->name }}</td>
    <td>{{ $escola->tipo }}</td>
    <td>{{ $escola->localizacao }}</td>
    <td>{{ $escola->telefone }}</td>
    <td>
        <a href="{{ route('escola.show',$escola->id) }}">Ver/Editar</a>
    </td>
</tr>
@endforeach
</tbody>
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Localização</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
</table>

<a class="btn btn-primary" href="{{ route('escola.cadastro') }}">Cadastrar Escola</a>

@if (isset($filters))
    {{ $escolas->appends($filters)->links() }}
@else
    {{ $escolas->links() }}
@endif

</div>

<style>
    h2{
        margin-top:35px;
    }
</style>

@endsection
