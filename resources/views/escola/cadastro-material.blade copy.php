<link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">

@extends('template/template')

@section('title','Cadastro de Escola')

@section('content')

    <div class="p-11 text-left text-2xl">
        <h1>Lista de materiais </h1>
        <h1 class="font-bold text-2xl text-white">{{$escola->name}}</h1>
        </div>
        <div class="w-full max-w-screen-xl mx-auto px-6">
        <div class="flex justify-start p-4 px-3 py-10">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg border-black border-2 px-3 py-2 mb-4">
                    <div class="block text-black text-lg font-semibold py-2 px-2">
                        Materiais
                    </div>
                    <div class="py-3 text-sm border-black border-2">
                        <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                            
                            <div class="flex-grow font-medium px-2">Lapis</div>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Doar
                        </button>
                        </div>
                        <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                           
                            <div class="flex-grow font-medium px-2">Caneta</div>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Doar
                        </button>
                        </div>
                        <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                            
                            <div class="flex-grow font-medium px-2">Caderno</div>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Doar
                        </button>
                        </div>
                        <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                        
                            <div class="flex-grow font-medium px-2">Mochila</div>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Doar
                        </button>
                        </div>
                        <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                
                            <div class="flex-grow font-medium px-2">Cartolina</div>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Doar
                        </button>
                        </div>
                    </div>
                    <div class="block text-sm text-right  py-2 px-3 -mx-3 -mb-2 rounded-b-lg">
                    <button class="bg-red-400 hover:bg-red-700  text-white font-bold py-2 px-4 rounded">
                            Voltar
                        </button>
                    
        
                        <button class="bg-blue-500 hover:bg-blue-700 text-white  font-bold py-2 px-4 rounded">
                            Confirmar doação
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
    <div class="p-2 h-0">
        <img src="{{ asset('image/cadastromaterial.png') }}">
    </div>
    <style>
        h2 {
            margin-top: 35px;
        }
    </style>

       

@endsection
