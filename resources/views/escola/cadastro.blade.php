@extends('template/template')

@section('title','Cadastro de Escola')

@section('content')

<div class="h-screen w-full flex flex-wrap">
    <div class="h-0 w-0 md:h-full md:w-1/2 flex justify-center items-center">
        <div class="hidden md:block">
            <p class="text-3xl">Seja uma escola parceira!</p>
            <p id="imagem1" class="h-96 w-96 mt-5"></p>
        </div>
    </div>
    <div class="w-full h-full md:h-full md:w-1/2 flex justify-center items-center">
        <div class="border-2 border-gray-300 h-auto w-5/6 p-5">
            <p class="font-bold">Cadastro Escola</p>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all(); as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action=""{{ route('escola.cadastro') }}">
            @csrf

            <input class="mt-4 w-full border-gray-300" type="text" name="name" id="name" placeholder="Nome da instituição" value="{{ old('name') }}" required autofocus>

            <input class="mt-2 w-full border-gray-300" type="text" name="localizacao" id="localizacao" placeholder="Logradouro" value="{{ old('localizacao') }}" required>

            <input class="mt-2 w-full border-gray-300" type="text" name="telefone" id="telefone" placeholder="Telefone de contato"  value="{{ old('telefone') }}"required>

            <select name="tipo" class="mt-2 w-full border-gray-300" required>
                <option value="" selected>Tipo de escola</option>
                <option value="estadual">Estadual</option>
                <option value="municipal">Municipal</option>
            </select>

            <input class="mt-2 w-full border-gray-300" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>

            <input class="mt-2 w-full border-gray-300" type="password" name="password" id="password" placeholder="Senha" value="{{ old('password') }}" required>

            <button class="bg-blue-500 text-white w-full p-1 mt-4" type="submit" value="cadastrar" >Registre-se</button>

            </form>
            <div class="flex flex-row mt-5 justify-center">
                <p>Já possui uma conta?</p>
                <a href="{{ route("login") }}" class="text-blue-400">Login</a>
            </div>
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
