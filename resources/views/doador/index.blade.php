@extends('template/template')

@section('title','Doador Index')

@section('content')

<h1>Doador Index</h1>

@if (session('message'))

<div class="alert alert-dismissible alert-primary">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Mensagem:</strong> {{ session('message') }}
</div>

@endif

<div>

<h2>Doadores</h2>

<form action="{{ route('doador.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar:">
    <button type="submit">Pesquisar</button>
</form>

<table class="table table-hover">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Localização</th>
        <th scope="col">CPF</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
<tbody>
@foreach ($doadors as $doador)
<tr>
    <th scope="row">{{ $doador->id }}</th>
    <td>{{ $doador->name }}</td>
    <td>{{ $doador->email }}</td>
    <td>{{ $doador->localizacao }}</td>
    <td>{{ $doador->cpf }}</td>
    <td>
        <a href="{{ route('doador.show',$doador->id) }}">Ver/Editar</a>
    </td>
</tr>
@endforeach
</tbody>
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Localização</th>
        <th scope="col">CPF</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
</table>

<a class="btn btn-primary" href="{{ route('doador.cadastro') }}">Cadastrar Doador</a>

@if (isset($filters))
    {{ $doadors->appends($filters)->links() }}
@else
    {{ $doadors->links() }}
@endif

</div>

<style>
    h2{
        margin-top:35px;
    }
</style>

@endsection
