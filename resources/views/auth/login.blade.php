<link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">
@extends('template/template')

@section('title','Login')

@section('content')

<div class="h-screen w-full flex flex-wrap">
    <div class="h-0 w-0 md:h-full md:w-1/2 flex justify-center items-center">
        <div class="hidden md:block">
            <p class="text-3xl">Seja bem-vindo de volta!</p>
            <p id="imagem1" class="h-96 w-96 mt-6"></p>
        </div>
    </div>
    <div class="w-full h-full md:h-full md:w-1/2 flex justify-center items-center">
        <div class="border-2 border-gray-300 h-auto w-5/6 p-5">
            <p class="w-full font-bold">Login</p>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all(); as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action=""{{ route('login') }}">
            @csrf

            <input class="mt-4 w-full border-gray-300" type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

            <input class="mt-2 w-full border-gray-300" type="text" name="password" id="password" placeholder="Senha" value="{{ old('password') }}" required>

            <select name="tipo" class="mt-2 w-full border-gray-300" required>
                <option value="" selected>Tipo de login</option>
                <option value="doador">Doador</option>
                <option value="escola">Escola</option>
                <option value="beneficiado">Beneficiado</option>
            </select>

            <button class="bg-blue-500 text-white w-full p-1 mt-4" type="submit" value="cadastrar" >Login</button>

            </form>

            <div class="flex flex-wrap mt-4">

                <div class="flex flex-row text-center justify-center w-full">
                    <div class="w-1/3 bg-gray-300 flex flex-nowrap justify-center items-center p-2">
                        <p id="imagem2" class="h-5 w-5"></p>
                        <p>Google</p>
                    </div>
                    <div class="w-1/3"></div>
                    <div class="w-1/3 bg-gray-300 flex flex-nowrap justify-center items-center p-2">
                        <p id="imagem3" class="h-5 w-5"></p>
                        <p class="">Facebook</p>
                    </div>
                </div>

                <div class="flex flex-row justify-center w-full mt-4">
                    <p>Esqueceu sua senha?</p>
                    <a href="{{ route("login") }}" class="text-blue-400">Login</a>
                </div>

            </div>

        </div>
    </div>
</div>

<style>
    #imagem1{
        background: url(image/login.png) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #imagem2{
        background: url(https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-256.png) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #imagem3{
        background: url(https://cdn3.iconfinder.com/data/icons/capsocial-round/500/facebook-512.png) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@endsection
