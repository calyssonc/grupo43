<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

@extends('template/template')

@section('title','Perfil beneficiado')

@section('content')
<div class="h-screen w-full bg-blue-200 rounded-3xl flex flex-col md:flex-wrap">
        <div class="h-2/6 md:h-1/2 w-full md:w-1/5 md:order-1">
            <div class="flex justify-center items-center h-full w-full">
                <p id="imagem1" class="rounded-full h-48 w-48"></p>
            </div>
        </div>
        <div class="h-2/6 md:h-full w-full md:w-4/5 md:order-3">
            <div class="w-full flex justify-center items-center md:mt-20">
                <div class="flex flex-row w-4/5">
                    <div class="w-1/2">
                        <p class="text-2xl">Olá, Jensen</p>
                        <div class="w-4/4 flex flex-col">
                        <textarea rows="5" class="p-4 text-gray-500 rounded-xl resize-none">Insira sua descrição</textarea>
                        </div>
                        </div>
                        </div>
                        </div>
                     </div>
                     <div class="h-2/6 md:h-1/2 w-full md:w-1/5 md:order-2">
            <div class="flex justify-center items-center h-full md:h-3/5 w-full">
                <div class="flex flex-col">
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Editar Perfil</button>
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Fórum</button>
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Lista de amigos</button>
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Sair</button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-300 h-96 w-full mt-8 flex flex-wrap">
    <p class="font-bold rounded border-b-2 border-orange-500 text-2xl text-center mb-4">Cadastro de dependentes</p>

    <div class="flex flex-row items-center rounded-full bg-blue-200 p-2 w-4/5">
                        <div class="h-full w-1/5">
                            <p id="imagem3" class="bg-blue-300 rounded-full h-16 w-16"></p>
                        </div>
                        <p class="w-2/5">Samuel</p>
                        <p class="w-2/5 text-right">Modificar lista</p>
                    </div>
                    <div class="flex flex-row mt-2 items-center rounded-full bg-blue-200 p-2 w-4/5">
                        <div class="h-full w-1/5">
                            <p id="imagem3" class="bg-blue-300 rounded-full h-16 w-16"></p>
                        </div>
                        <p class="w-2/5">Maria</p>
                        <p class="w-2/5 text-right">Modificar lista</p>
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
    #imagem2{
            background: url(https://i.pinimg.com/474x/e9/d0/26/e9d0266a1b2281173e49104d16af51fc.jpg) no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
    }
</style>

@endsection