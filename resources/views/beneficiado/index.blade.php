@extends('template/template')

@section('title','Beneficiado Index')

@section('content')

<h1>Beneficiado Index</h1>

@if (session('message'))

<div class="alert alert-dismissible alert-primary">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Mensagem:</strong> {{ session('message') }}
</div>

@endif

<div>

<h2>Beneficiados</h2>

<form action="{{ route('beneficiado.search') }}" method="post">
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
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
<tbody>
@foreach ($beneficiados as $beneficiado)
<tr>
    <th scope="row">{{ $beneficiado->id }}</th>
    <td>{{ $beneficiado->name }}</td>
    <td>{{ $beneficiado->email }}</td>
    <td>{{ $beneficiado->localizacao }}</td>
    <td>{{ $beneficiado->cpf }}</td>
    <td>{{ $beneficiado->telefone }}</td>
    <td>
        <a href="{{ route('beneficiado.show',$beneficiado->id) }}">Ver/Editar</a>
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
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
</table>

<a class="btn btn-primary" href="{{ route('beneficiado.cadastro') }}">Cadastrar Beneficiado</a>

@if (isset($filters))
    {{ $beneficiados->appends($filters)->links() }}
@else
    {{ $beneficiados->links() }}
@endif

</div>

<style>
    h2{
        margin-top:35px;
    }
</style>

@endsection
