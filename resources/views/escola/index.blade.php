@extends('template/template')

@section('title','Escola Index')

@section('content')


<div class="grid grid-cols-1 w-screen
            lg:grid-cols-2 pr-3 w-full">
    <div class="p-2 lg:p-8
                lg:min-h-screen lg:items-center">

        <div class="grid-rows-1 border rounded-xl my-4">
            <div class="flex flex-row  py-4 px-1 ">
                <div class="w-14">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="mt-1 flex rounded-full shadow-sm w-full">
                    <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-full sm:text-sm border-gray-300" placeholder="Digite o nome da escola">
                </div>
            </div>

            <div class="flex flex-row ...">
                <div>batata</div>
                <div>batata</div>
                <div>batata</div>
            </div>
        </div>



        <div class="border-4"></div>
        @foreach ($escolas as $escola)
        <div class="
            h-32 bg-gray-100 shadow-2xl border-4 border-gray-500 hover:border-blue-500 m-2 rounded-3xl p-2 grid grid-cols-5 lg:rounded-full lg:min-h-42 ">
            <div class="text-center col-span-1">
                <div class="pt-5">
                    <div class="w-3/5 h-3/5 flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10 lg-w-3/4">

                    </div>
                </div>
            </div>
            <div class="text-center grid grid-cols-1 col-span-3 m-2">
                <div class="p-2">
                    <h1 class=" font-bold text-sm"> {{ $escola->name }} </h1>
                </div>
                <div class="text-sm">
                    <p>{{ $escola->localizacao}}</p>
                </div>
                <div class="text-sm">
                    <p>{{ $escola->telefone }}</p>
                </div>
            </div>
            <div class="flex col-span-1">
                <div class="pt-5 w-full">
                    <button class="w-10/12 text-xs flex items-center justify-center px-7 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10 lg-w-3/4 lg:text-lg ">
                        Doar
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="p-2 h-0 invisible lg:visible lg-h-full">
        <img src="{{ asset('image/booklover.png') }}">
    </div>
    <style>
        h2 {
            margin-top: 35px;
        }
    </style>

    @endsection