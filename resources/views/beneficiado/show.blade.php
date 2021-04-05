<link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">

@extends('template/template')

@section('title','Perfil beneficiado')

@section('content')

<div class="h-2/3 w-full bg-blue-200 rounded-3xl flex flex-col md:flex-wrap pt-11">
        <div class="h-2/6 md:h-1/2 w-full md:w-1/5 md:order-1">
            <div class="flex justify-center items-center h-full w-full">
                <p id="imagem1" class="rounded-full h-48 w-48"></p>
            </div>
        </div>
        <div class="h-2/6 md:h-full w-full md:w-4/5 md:order-3">
            <div class="w-full flex justify-center items-center md:mt-20">
                <div class="flex flex-row w-4/5">
                    <div class="w-1/2">
                    <div class="w-1/3 rounded border-b-8 border-yellow-600">
                        <p class="text-3xl">Olá, {{ $beneficiado->name }}!</p>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="h-full w-full">
                    <div class="w-full flex justify-center items-center">
                    <input class="h-20 md:h-52 w-4/5 rounded-2xl" type="text" placeholder="Descrição...">
                    </div>
                        </div>
                     </div>
                     <div class="h-2/6 md:h-1/2 w-full md:w-1/5 md:order-2">
            <div class="flex justify-center items-center h-full md:h-3/5 w-full">
                <div class="flex flex-col">
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Editar Perfil</button>
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Fórum</button>
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Lista de amigos</button>
                    <a class="bg-blue-500 rounded text-white px-5 p-1 m-2 text-center" href="{{ route('logout') }}">Sair</a>
                </div>
            </div>
        </div>
    </div>
    <div class="h-screen w-full md:flex md:flex-row">
    <div class="bg-gray-300 h-96 w-full mt-8 flex flex-wrap">
    <div class="w-full h-full">
    <div class="w-full h-full flex flex-col items-center justify-center">
    <div class="w-46 rounded border-b-8 border-yellow-600">
        <p class="font-bold text-center text-2xl mb-4">Cadastro de dependentes</p>
    </div>
         <div class="flex flex-row items-center rounded-full bg-blue-200 p-2 w-4/5">
                        <p class="w-2/5 font-bold">Samuel</p>
                        <p class="w-2/5 font-bold text-right">Modificar lista</p>
                    </div>
                    <div class="flex flex-row mt-2 items-center rounded-full bg-blue-200 p-2 w-4/5">
                        <p class="w-2/5 font-bold">Maria</p>
                        <p class="w-2/5  font-bold text-right">Modificar lista</p>
                     </div>
                     <button class="bg-blue-500 text-white rounded py-1 px-14 mt-3">Novo dependente</button>
        </div>
    </div>
    </div>
    </div>
    <div class="h-screen w-full md:flex md:flex-row">
    <div class="h-2/4 md:h-full w-full md:w-1/2 border-t-2 border-b-2 md:border-b-0 md:border-r-4 md:border-t-4 border-yellow-600 flex justify-center items-center">
    <div class="w-full h-full">
                <div class="w-full h-full flex flex-col items-center justify-center">
                    <p class="font-bold text-2xl text-center mb-4">Situação</p>
                    <div class="flex flex-row items-center rounded-full bg-blue-200 p-2 w-4/5">
                        <p class="w-2/5 font-bold">Samuel</p>
                        <p class="w-2/5 text-right">__/__/__</p>

                        <button class="bg-yellow-200 text-yellow-600 rounded-xl py-1 font-bold px-6 mt-3">Pendente</button>
                    </div>
                    <div class="flex flex-row items-center rounded-full bg-blue-200 p-2 w-4/5">
                        <p class="w-2/5 font-bold">Maria</p>
                        <p class="w-2/5 text-right">23/03/2021</p>

                        <button class="bg-white text-green-600 rounded-xl py-1 font-bold px-6 mt-3">Recebido</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="h-1/2 md:h-full w-full md:w-1/2 flex flex-col justify-center items-center md:border-t-4 md:border-yellow-600">
            <div class="flex flex-col justify-center items-center w-full">
                <p class="text-center text-2xl my-2">Mais comentados!</p>
                <div class="w-full flex justify-center">
                    <div class="w-5/6 flex flex-wrap justify-center items-center border border-black shadow-md rounded-lg">
                        <div class="w-4/6 flex flex-col justify-center p-2">
                            <p class="font-bold ml-2">Doação conjunta em santos</p>
                            <p class="ml-2">Vamos realizar um mutirão para doar materiais para a escola xyz!</p>
                        </div>
                        <di class="w-2/6 flex justify-center">
                            <button class="rounded bg-blue-500 text-white p-2">Saiba mais</button>
                        </div>
                    </div>
                    <div class="mt-2 w-5/6 flex flex-wrap justify-center items-center border border-black shadow-md rounded-lg">
                        <div class="w-4/6 flex flex-col justify-center p-2">
                            <p class="font-bold ml-2">Doação conjunta em santos</p>
                            <p class="ml-2">Vamos realizar um mutirão para doar materiais para a escola xyz!</p>
                        </div>
                        <di class="w-2/6 flex justify-center">
                            <button class="rounded bg-blue-500 text-white p-2">Saiba mais</button>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="bg-blue-500 text-white rounded py-1 px-20 mt-3">Fórum</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<style>

    #imagem1{
            background: url(https://i.pinimg.com/564x/e9/8f/d9/e98fd9da48543a3c1b6acb8b2d634f98.jpg) no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
    }

</style>

@endsection
