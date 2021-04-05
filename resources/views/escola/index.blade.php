@extends('template/template')

@section('title','Perfil escola')

@section('content')

<div class="">

<<<<<<< HEAD
<div class="p-4 bg-gradient-to-br w-screen bg-blue-200 w-screen h-80">
    
</div>
<div class="grid grid-col">


</div>
@endsection
=======
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

<link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">

@endsection
>>>>>>> 153262e7f68380b22a42382613bdee1f22472289
