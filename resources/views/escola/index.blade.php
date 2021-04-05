@extends('template/template')

@section('title','Perfil escola')

@section('content')

<div class="h-screen w-full mt-44">

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
        @foreach ($escola->material as $filho)
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

    <a href="{{ route('escola.cadastroMaterial') }}">cadastrar material</a>
</div>

@endsection
