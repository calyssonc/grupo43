@extends('template/template')

@section('title','Perfil escola')

@section('content')


<div class="grid  grid-rows-2 mx-2 mt-2 p-4 bg-gradient-to-br from-blue-400 to-blue-200 rounded-t-3xl lg:grid-cols-3 lg:grid-rows-1 pt-11">
    <div class="row-span-1 mx-2 place-self-left lg:col-span-1">
        <div class="border-2 border-black-500 rounded-full w-48 w-48 overflow-hidden">
            <img class="w-42 h-42" src="https://i.pinimg.com/originals/99/8e/1c/998e1cce79d61f1f3d5c69091a5bd455.jpg">
        </div>
    </div>
    <div class="row-span-1 mx-2 lg:col-span-2">
        <h1 class="font-bold text-2xl text-white">{{$escola->name}}</h1>
        <div class="py-3">
            <h1 class="text-bold mb-1">Lv: 2</h1>
            <div class="mb-2 h-4 relative max-w-xl rounded-full overflow-hidden">
                <div class=" w-full h-full bg-gray-200 absolute"></div>
                <div class="h-full bg-yellow-500 absolute" style="width:30%"></div>
            </div>
            <p class="uppercase"> Escola {{$escola->tipo}}</p>
            <p>{{$escola->localizacao}}</p>
            <h3>Contato :</h3>
            <ul class="list-inside bg-rose-200 ...">
                <li>
                    <p>{{$escola->telefone}}</p>
                </li>
                <li>
                    <p>{{$escola->email}}</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="grid grid-row-2 bg-gradient-to-tr from-blue-400 to-blue-200 mx-2 rounded-b-3xl lg:bg:white lg:grid-cols-3 lg:grid-row-1 ">
    <div class="grid grid-cols-6 gap-2 lg:col-start-2 lg:col-span-2">
        <div class="place-self-center ...">
            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                <p>+</p>
            </div>
        </div>
        <div class="place-self-center ...">
            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                <p>+</p>
            </div>
        </div>
        <div class="place-self-center ...">
            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                <p>+</p>
            </div>
        </div>
        <div class="place-self-center ...">
            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                <p>+</p>
            </div>
        </div>
        <div class="place-self-center ...">
            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                <p>+</p>
            </div>
        </div>
        <div class="place-self-center ...">
            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                <p>+</p>
            </div>
        </div>
    </div>

    <div class="grid grid-flow-row grid-rows-3 w-full p-4 lg:row-start-1 ">
        <div class="row-span-1 mx-2 p-2">
            <button class="shadow-2xl rounded-xl p-2 w-full bg-gradient-to-br from-blue-500 to-blue-700 text-white lg:w-1/2">Medalhas</button>
        </div>
        <div class="row-span-1 mx-2 p-2">
            <button class="shadow-2xl rounded-xl p-2 w-full bg-gradient-to-br from-blue-500 to-blue-700 text-white lg:w-1/2">Galeria</button>
        </div>
        <div class="row-span-1 mx-2 p-2">
            <button class="shadow-2xl rounded-xl p-2 w-full bg-gradient-to-br from-blue-500 to-blue-700 text-white lg:w-1/2">Saiba mais</button>
        </div>
        <div class="row-span-1 mx-2 p-2">
        <button class="text-white lg:w-1/2 text-center shadow-2xl rounded-xl p-2 w-full bg-gradient-to-br from-blue-500 to-blue-700">
            <a href="{{ route('logout') }}">Sair</a></button>
        </div>
    </div>
</div>

<div class="grid grid-cols-3 my-2 py-10 border-gray-300 border-2 rounded-3xl m-2 shadow-sm bg-gray-200">
    <div class="place-self-center">
        <img class="w-24 h-24 border-2 border-black-500 rounded-full" src="https://cdn.discordapp.com/attachments/822990528931954688/828110878892359700/medalha_1.png">
    </div>
    <div class="grid grid-cols-2 col-span-2 p-2 lg:grid-rows-1 lg:grid-cols-4">
        <div class="text-center p-2">
            <p class="font-bold">Posição no ranking</p>
            <p class="text-3xl font-bold lg:text-6xl">50</p>
        </div>
        <div class="text-center p-2">
            <p class="font-bold">Famílias Cadastradas</p>
            <p class="text-3xl font-bold lg:text-6xl">250</p>
        </div>
        <div class="text-center p-2">
            <p class="font-bold">Famílias beneficiadas</p>
            <p class="text-3xl font-bold lg:text-6xl">170</p>
        </div>
        <div class="text-center p-2">
            <p class="font-bold">Doações recebidas</p>
            <p class="text-3xl font-bold lg:text-6xl">150</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 w-screen lg:grid-cols-2 min-h-min">
    <div class="border-2 m-2 rounded-3xl border-black text-center bg-gradient-to-tr from-blue-400 to-blue-200">
        <h1 class="text-2xl font-bold py-1">Lista de alunos</h1>
        <div class="border-2 m-2 rounded-3xl border-black bg-white">
            <div class="grid grid-cols-3 border-black border-2 m-2 rounded-3xl bg-white shadow-sm">
                <h1 class="text-2xl font-bold col-span-2 self-center"> Juquinha </h1>
                <button class="border-2 m-1 rounded-2xl bg-blue-400 text-white">Ver Lista Completa</button>
            </div>
            <div class="grid grid-cols-3 border-black border-2 m-2 rounded-3xl bg-white shadow-sm">
                <h1 class="text-2xl font-bold col-span-2 self-center"> Maria </h1>
                <button class="border-2 m-1 rounded-2xl bg-blue-400 text-white">Ver Lista Completa</button>
            </div>
        </div>
    </div>
    <div class="p-2">
        <img class="hidden md:hidden  lg:block" src="{{ asset('image/booklover.png') }}">
    </div>
</div>
@endsection
