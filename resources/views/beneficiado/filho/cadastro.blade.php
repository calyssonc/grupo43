@extends('template/template')

@section('title','Cadastro de Escola')

@section('content')

<div class="h-screen w-full flex flex-wrap">
    <div class="h-0 w-0 md:h-full md:w-1/2 flex justify-center items-center">
        <div class="hidden md:block">
            <p class="text-3xl">Cadastre seu dependente!</p>
            <p id="imagem1" class="h-96 w-96 mt-5"></p>
        </div>
    </div>
    <div class="w-full h-full md:h-full md:w-1/2 flex justify-center items-center">
        <div class="border-2 border-gray-300 h-auto w-5/6 p-5">
            <p class="font-bold">Novo Dependente</p>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all(); as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('filho.store') }}">
            @csrf

            <input class="mt-4 w-full border-gray-300" type="text" name="name" id="name" placeholder="Nome" value="{{ old('name') }}" required autofocus>

            <input class="mt-2 w-full border-gray-300" type="text" name="ra" id="ra" placeholder="RA" value="{{ old('ra') }}" required>

            <select class="mt-2 w-full border-gray-300" name="id_escola">
                @foreach($escolas as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

            <input class="hidden" type="text" name="id_beneficiado" id="id_beneficiado" value="{{ $beneficiado_id }}">

            <button class="bg-blue-500 text-white w-full p-1 mt-4" type="submit" value="cadastrar" >Registrar</button>

            </form>

        </div>
    </div>
</div>

<style>
    #imagem1{
        background: url(https://uploads-ssl.webflow.com/5f4db4f2bfdf4b1052de205d/5fb6d6618b59c73a19453807_undraw_education_f8ru.svg) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@endsection
