@extends('template/template')

@section('title','Perfil filho')

@section('content')

<h1>Perfil {{ $filho->name }}</h1>

<form action="{{ route('filho.update', $filho->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" title="name" id="name" placeholder="Nome" value="{{ $filho->name ?? old('name') }}">
    </br>
    <input type="text" name="ra" title="ra" id="ra" placeholder="Número de registro do aluno (RA)" value="{{ $filho->ra ?? old('ra') }}">
    </br>
    <input type="number" name="id_beneficiado" title="id_beneficiado" id="id_beneficiado" placeholder="id_beneficiado" value="{{ $filho->id_beneficiado ?? old('id_beneficiado') }}">
    </br>
    <label for="id_escola">Escola</label>
    <select class="form-control" name="id_escola">
        @foreach($escolas as $item)
            @if ($item->id === $filho->id_escola)
                <option selected value="{{$item->id}}">{{$item->name}}</option>
            @else
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endif
        @endforeach
    </select>
    <button type="submit">Atualizar</button>
</form>

<form action="{{ route('filho.destroy',$filho->id) }}" method="post">
    @csrf
    @method("DELETE")
    <button type="submit">Deletar</button>
</form>

<a class="btn btn-primary" href="{{ route('filho.solicitarMaterial') }}">Solicitar material escolar</a>

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
