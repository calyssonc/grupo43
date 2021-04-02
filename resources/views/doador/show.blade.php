@extends('template/template')

@section('title','Perfil doador')

@section('content')

    {{-- Dados do perfil --}}
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
                        <p class="text-2xl">Olá, Dean W!</p>
                    </div>
                    <div class="flex flex-row justify-center items-center w-1/2">
                        <div>
                            <p>Exp.</p>
                        </div>
                        <div class="bg-yellow-500 h-1 w-1/4 mx-2">
                        </div>
                        <div>
                            <p>Lv. 2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-full w-full">
                <div class="w-full flex justify-center items-center">
                    <input class="h-20 md:h-52 w-4/5 rounded-2xl" type="text" placeholder="Descrição...">
                </div>
                <div class="w-full flex justify-center items-center">
                    <div class="w-4/5 md:mt-10">
                        <p class="font-bold mt-2">Últimas conquistas</p>
                        <div class="flex flex-row space-x-10 items-center justify-center md:justify-start">
                            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                                <p>+</p>
                            </div>
                            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                                <p>+</p>
                            </div>
                            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                                <p>+</p>
                            </div>
                            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                                <p>+</p>
                            </div>
                            <div class="bg-white rounded-full mt-2 h-10 md:h-20 w-10 md:w-20 flex justify-center items-center">
                                <p>+</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-2/6 md:h-1/2 w-full md:w-1/5 md:order-2">
            <div class="flex justify-center items-center h-full md:h-3/5 w-full">
                <div class="flex flex-col">
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Editar Perfil</button>
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Medalhas</button>
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Lista de amigos</button>
                    <button class="bg-blue-500 rounded text-white px-5 p-1 m-2">Sair</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Pontos --}}
    <div class="bg-gray-300 h-96 w-full mt-8 flex flex-wrap">
        <div class="w-2/5 md:w-1/6 h-full flex justify-center items-center">
            <p id="imagem2" class="h-40 w-40"></p>
        </div>
        <div class="w-3/5 md:w-5/6 h-full flex flex-wrap md:flex-row md:space-x-40 md:justify-center md:items-center">
            <div class="h-1/2 md:h-auto w-1/2 md:w-auto flex justify-center items-center">
                <div class="text-center p-2">
                    <p>Doações Realizadas</p>
                    <p class="text-6xl">5</p>
                </div>
            </div>
            <div class="h-1/2 md:h-auto w-1/2 md:w-auto flex justify-center items-center">
                <div class="text-center p-2">
                    <p>Urgências atendidas</p>
                    <p class="text-6xl">3</p>
                </div>
            </div>
            <div class="h-1/2 md:h-auto w-1/2 md:w-auto flex justify-center items-center">
                <div class="text-center p-2">
                    <p>Posição no Rank</p>
                    <p class="text-6xl">28</p>
                </div>
            </div>
            <div class="h-1/2 md:h-auto w-1/2 md:w-auto flex justify-center items-center">
                <div class="text-center p-2">
                    <p>Itens doados</p>
                    <p class="text-6xl">50</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Histórico de Doações / Mais comentados --}}
    <div class="h-screen w-full md:flex md:flex-row">
        {{-- Histórico de doações inicio --}}
        <div class="h-1/2 md:h-full w-full md:w-1/2 border-t-2 border-b-2 md:border-b-0 md:border-r-4 md:border-t-4 border-yellow-600 flex justify-center items-center">
            <div class="w-full h-full">
                <div class="w-full h-full flex flex-col items-center justify-center">
                    <p class="font-bold text-2xl text-center mb-4">Histórico de Doações</p>
                    <div class="flex flex-row items-center rounded-full bg-blue-200 p-2 w-4/5">
                        <div class="h-full w-1/5">
                            <p id="imagem3" class="bg-blue-300 rounded-full h-16 w-16"></p>
                        </div>
                        <p class="w-2/5">Escola X</p>
                        <p class="w-2/5 text-right">22/04/21</p>
                    </div>
                    <div class="flex flex-row mt-2 items-center rounded-full bg-blue-200 p-2 w-4/5">
                        <div class="h-full w-1/5">
                            <p id="imagem3" class="bg-blue-300 rounded-full h-16 w-16"></p>
                        </div>
                        <p class="w-2/5">Escola X</p>
                        <p class="w-2/5 text-right">22/04/21</p>
                    </div>
                    <button class="bg-blue-500 text-white rounded py-1 px-14 mt-3">Nova doação</button>
                </div>
            </div>
        </div>
        {{-- Histórico de Doações FIM --}}

        {{-- Mais comentados Inicio --}}
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
        {{-- Mais comentados FIM --}}
    </div>

    {{-- Imagens usada --}}
    <style>
        #imagem1{
            background: url(https://poltronanerd.com.br/wp-content/uploads/2018/04/Dean-Winchester.jpg) no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        #imagem2{
            background: url(https://media.discordapp.net/attachments/822990528931954688/827398547132907540/medalha_3.png) no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        #imagem3{
            background: url(https://media.discordapp.net/attachments/822990528931954688/827408127992791060/Escola_X_1.png) no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        #imagem4{
            background: url(https://media.discordapp.net/attachments/822990528931954688/827408200676016138/Escola_Y_1.png) no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        #imagem5{
            background: url(https://media.discordapp.net/attachments/822990528931954688/827408254539530290/Escola_Z_1.png) no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

@endsection
