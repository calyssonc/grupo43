@extends('template/template')

@section('title','Perfil escola')

@section('content')

<div class="">

    <div class="pt-32"></div>

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

    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('escola.cadastroMaterial') }}">cadastrar material</a>
    <div class="mb-12" ></div>

</div>

<link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">

@endsection
