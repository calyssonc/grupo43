@extends('template/template')

@section('title','Perfil escola')

@section('content')

<div class="grid grid-rows-2 w-full p-4 bg-gradient-to-br from-blue-400 to-blue-200 lg:grid-cols-2">
    <div class="row-span-1 mx-2 place-self-center lg:col-span-1">
        <div class="border-2 border-black-500 rounded-full h-11 w-11 overflow-hidden">
            <img class="w-42 h-42" src="https://i.pinimg.com/originals/99/8e/1c/998e1cce79d61f1f3d5c69091a5bd455.jpg">
        </div>
    </div>
    <div class="row-span-1 mx-2 lg:col-span-1">
        <h1 class="font-bold text-2xl text-white">{{$escola->name}}</h1>
        <div class="py-3">
            <h1 class="text-bold mb-1">Lv: 2</h1>
            <div class="mb-2 h-3 relative max-w-xl rounded-full overflow-hidden">
                <div class=" w-full h-full bg-gray-200 absolute"></div>
                <div class="h-full bg-yellow-500 absolute" style="width:10%"></div>
            </div>
            <p> Escola {{$escola->tipo}}</p>
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
<div class="bg-gradient-to-tr from-blue-400 to-blue-200  lg:bg:white">

    <div class="p-4 justify-self-center">
        <button type="button" class="border-2 border-gray-300 inline max-w-xs bg-gray-800 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-11 w-11 rounded-full" src="https://www.jundiafoods.com.br/wp-content/uploads/2019/09/batatas-porcoes.jpg" alt="">
        </button>
        <button type="button" class="border-2 border-gray-300 inline max-w-xs bg-gray-800 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-11 w-11 rounded-full" src="https://www.jundiafoods.com.br/wp-content/uploads/2019/09/batatas-porcoes.jpg" alt="">
        </button>
        <button type="button" class="border-2 border-gray-300 inline max-w-xs bg-gray-800 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-11 w-11 rounded-full" src="https://www.jundiafoods.com.br/wp-content/uploads/2019/09/batatas-porcoes.jpg" alt="">
        </button>
        <button type="button" class="border-2 border-gray-300 inline max-w-xs bg-gray-800 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-11 w-11 rounded-full" src="https://www.jundiafoods.com.br/wp-content/uploads/2019/09/batatas-porcoes.jpg" alt="">
        </button>
        <button type="button" class="border-2 border-gray-300 inline max-w-xs bg-gray-800 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-11 w-11 rounded-full" src="https://www.jundiafoods.com.br/wp-content/uploads/2019/09/batatas-porcoes.jpg" alt="">
        </button>
        <button type="button" class="border-2 border-gray-300 inline max-w-xs bg-gray-800 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-11 w-11 rounded-full" src="https://www.jundiafoods.com.br/wp-content/uploads/2019/09/batatas-porcoes.jpg" alt="">
        </button>
    </div>

    <div class="grid grid-flow-row grid-rows-3 w-full p-4">
        <div class="row-span-1 mx-2 p-2">
            <button class="shadow-2xl rounded-xl p-2 w-full bg-gradient-to-br from-blue-500 to-blue-700 text-white">Medalhas</button>
        </div>
        <div class="row-span-1 mx-2 p-2">
            <button class="shadow-2xl rounded-xl p-2 w-full bg-gradient-to-br from-blue-500 to-blue-700 text-white">Galeria</button>
        </div>
        <div class="row-span-1 mx-2 p-2">
            <button class="shadow-2xl rounded-xl p-2 w-full bg-gradient-to-br from-blue-500 to-blue-700 text-white">Saiba mais</button>
        </div>
    </div>
</div>

{{-- Pontos --}}
<div class="bg-gray-300 h-96 w-full mt-3 md:mt-8 flex flex-wrap">
    <div class="w-2/5 md:w-1/6 h-full flex justify-center items-center">
        <p id="imagem1" class="h-40 w-40"></p>
    </div>
    <div class="w-3/5 md:w-5/6 h-full flex flex-wrap md:flex-row md:space-x-40 md:justify-center md:items-center">
        <div class="h-1/2 md:h-auto w-1/2 md:w-auto flex justify-center items-center">
            <div class="text-center p-2">
                <p>Posição no Ranking</p>
                <p class="text-6xl">50</p>
            </div>
        </div>
        <div class="h-1/2 md:h-auto w-1/2 md:w-auto flex justify-center items-center">
            <div class="text-center p-2">
                <p>Famílias cadastradas</p>
                <p class="text-6xl">250</p>
            </div>
        </div>
        <div class="h-1/2 md:h-auto w-1/2 md:w-auto flex justify-center items-center">
            <div class="text-center p-2">
                <p>Famílias beneficiadas</p>
                <p class="text-6xl">170</p>
            </div>
        </div>
        <div class="h-1/2 md:h-auto w-1/2 md:w-auto flex justify-center items-center">
            <div class="text-center p-2">
                <p>Doações Recebidas</p>
                <p class="text-6xl">150</p>
            </div>
        </div>
    </div>
</div>

{{-- Lista de aluno --}}
<div class="h-screen w-full flex flex-wrap">
    <div class="w-full md:w-1/2 h-full flex justify-center items-center">
        <div class="bg-blue-300 rounded-3xl h-5/6 w-5/6 flex flex-col items-center justify-center">
            <p class="text-center font-semibold text-3xl my-2">Lista de Alunos</p>
            <div class="bg-white rounded-3xl h-5/6 w-5/6 p-3">
                <div class="mb-2 border-2 w-full h-16 flex flex-wrap justify-center items-center">
                    <div class="h-1/2 w-1/2 flex justify-center items-center">
                        <p class="text-xl">Juquinha</p>
                    </div>
                    <div class="h-1/2 w-1/2 flex justify-center items-center">
                        <button class="bg-blue-500 text-white p-2 rounded-xl">Ver lista completa</button>
                    </div>
                </div>
                <div class="mb-2 border-2 w-full h-16 flex flex-wrap justify-center items-center">
                    <div class="h-1/2 w-1/2 flex justify-center items-center">
                        <p class="text-xl">Maria</p>
                    </div>
                    <div class="h-1/2 w-1/2 flex justify-center items-center">
                        <button class="bg-blue-500 text-white p-2 rounded-xl">Ver lista completa</button>
                    </div>
                </div>
                <div class="mb-2 border-2 w-full h-16 flex flex-wrap justify-center items-center">
                    <div class="h-1/2 w-1/2 flex justify-center items-center">
                        <p class="text-xl">Igor</p>
                    </div>
                    <div class="h-1/2 w-1/2 flex justify-center items-center">
                        <button class="bg-blue-500 text-white p-2 rounded-xl">Ver lista completa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-0 w-0 md:w-1/2 md:h-full flex items-center justify-center">
        <p id="imagem2" class="w-3/4 h-3/4 m-12"></p>
    </div>
</div>

{{-- <form action="{{ route('escola.destroy',$escola->id) }}" method="post">
    @csrf
    @method("DELETE")
    <button type="submit">Deletar</button>
</form>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($escola->material as $material)
    <tr>
        <th scope="row">{{ $material->id }}</th>
        <td>{{ $material->name }}</td>
        <td>
            <a href="{{ route('escola.showMaterial',$material->id) }}">Ver/Editar</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
</table>

<a class="btn btn-primary" href="{{ route('escola.cadastroMaterial') }}">Cadastrar Materiais</a> --}}


{{-- Imagens usada --}}
<style>
    #imagem1{
        background: url(https://media.discordapp.net/attachments/822990528931954688/827398547132907540/medalha_3.png) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #imagem2{
        background: url(https://clientes.meuvista.com/wp-content/uploads/2020/06/undraw_back_to_school_inwc-1024x751.png) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@endsection
