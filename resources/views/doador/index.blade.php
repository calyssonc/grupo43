@extends('template/template')

@section('title','Lista de escolas')

@section('content')
<div class="p-11 text-center text-3xl lg:text-6xl pt-20">
    <h1> Comece agora e pesquise por escolas próximas a você! </h1>
</div>

<div class="grid grid-cols-1 w-screen
            lg:grid-cols-2 pr-3 w-full">
    <div class="p-2 lg:p-8
                lg:min-h-screen lg:items-center">
        <form action="{{ route('escola.search') }}" method="post" class="grid-rows-1 border rounded-xl my-4 bg-gradient-to-br from-gray-100">
            @csrf
            <div class="flex flex-row py-4 px-1 mx-2">
                <div class="mt-1 flex rounded-full shadow-sm w-full pr-2 ">
                    <input type="text" name="search" id="search" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-full sm:text-sm border-gray-300" placeholder="Digite o nome da escola">
                </div>
                <button type="submit" class="w-14 rounded-full shadow-sm border-2 hover:border-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>
            <!--
            <div class="flex flex-row ...">
                <select id="estado" name="estado" class="m-2 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Estado</option>
                    <option>São Paulo</option>
                    <option>Ceara</option>
                    <option>Santa Catarina</option>
                </select>
                <select id="cidade" name="cidade" class="m-2 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Cidade</option>
                    <option>São Paulo</option>
                    <option>Mongaguá</option>
                    <option>Santos</option>
                    <option>São Vicente</option>
                    <option>CiceroCity</option>
                    <option>DafneCity</option>
                </select>
                <select id="bairro" name="bairro" class="m-2 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Bairro</option>
                    <option>Aguápeu</option>
                    <option>Parque Continental</option>
                    <option>Aparecida</option>
                </select>
            </div>
            -->
        </form>



        <div class="border-4"></div>
        @if(isset($escolas) && $escolas->count() == 0)
        Não há escolas cadastradas
        @endif
        @foreach ($escolas as $escola)
        <div class="
            h-32 bg-gradient-to-br from-gray-200 shadow-2xl border-2 border-gray-300 hover:border-blue-500 m-2 rounded-3xl p-2 grid grid-cols-5 lg:rounded-full lg:min-h-42 ">
            <div class="text-center col-span-1 ">
                <div class="py-3 px-4">
                    <div class="border-2 border-black-500 rounded-full w-20 h-20 overflow-hidden">
                        <img class="w-42 h-42" src="https://i.pinimg.com/originals/99/8e/1c/998e1cce79d61f1f3d5c69091a5bd455.jpg">
                    </div>
                </div>
            </div>
            <div class="text-center grid grid-cols-1 col-span-3 m-2  ">
                <div class="p-2">
                    <h1 class=" font-bold text-sm uppercase"> {{ $escola->name }} </h1>
                </div>
                <div class="text-sm">
                    <p class="uppercase">{{ $escola->localizacao}}</p>
                </div>
                <div class="text-sm">
                    <p>{{ $escola->telefone }}</p>
                </div>
            </div>
            <div class="flex col-span-1">
                <div class="py-4 w-full">
                    <a href="{{ route('escola.show2',$escola->id)}}" class="w-10/12 text-xs flex items-center justify-center px-7 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 md:py-4 md:text-lg md:px-10 lg-w-3/4 lg:text-lg ">
                        Doar!
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="p-2 h-0">
        <img class="hidden md:hidden lg:block" src="{{ asset('image/booklover.png') }}">
    </div>
</div>

@endsection