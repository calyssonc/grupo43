@extends('template/template')

@section('title','Perfil filho')

@section('content')

{{-- <form action="{{ route('filho.update', $filho->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" title="name" id="name" placeholder="Nome" value="{{ $filho->name ?? old('name') }}">
    </br>
    <input type="text" name="ra" title="ra" id="ra" placeholder="Número de registro do aluno (RA)" value="{{ $filho->ra ?? old('ra') }}">
    </br>
    <input type="number" name="id_beneficiado" title="id_beneficiado" id="id_beneficiado" placeholder="id_beneficiado" value="{{ $filho->id_beneficiado ?? old('id_beneficiado') }}">
    </br>
    <label for="id_escola">Escola</label>
    <select class="form-control" name="id_escola">
        @foreach($escolas as $item)
            @if ($item->id === $filho->id_escola)
                <option selected value="{{$item->id}}">{{$item->name}}</option>
            @else
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endif
        @endforeach
    </select>
    <button type="submit">Atualizar</button>
</form>

<form action="{{ route('filho.destroy',$filho->id) }}" method="post">
    @csrf
    @method("DELETE")
    <button type="submit">Deletar</button>
</form> --}}

<div class="p-11 text-left text-2xl">
    <h1>Lista de materiais</h1>
    <h1 class="font-bold text-2xl"> Nome da escola </h1>

    @if (Auth::guard('beneficiado')->check())
        <div>
            <p>Adicionar novo material</p>
            <form method="POST" action="{{ route('filho.storeSolicitarMaterial') }}">
                <select class="form-control" name="id_material">
                    @foreach($filho->escola->material as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <input type="hidden" name="id_filho" id="id_filho" value="{{ $filho->id }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Doar" >Cadastrar</button>
            </form>
        </div>
    @endif

    </div>
    <div class="w-full max-w-screen-xl mx-auto px-6">
    <div class="flex justify-start p-4 px-3 py-10">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg border-black border-2 px-3 py-2 mb-4">
                <div class="block text-black text-lg font-semibold py-2 px-2">
                    Materiais
                </div>
                <div class="py-3 text-sm border-black border-2">
                    @foreach ($necessita as $item)
                        <div class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                            <div class="flex-grow font-medium px-2">{{ $item->material->name }}</div>
                            <a href="{{ route('doador.doarMaterial',$item->id) }}">Doar</a>
                        </div>
                    @endforeach
                </div>
                <div class="block text-sm text-right  py-2 px-3 -mx-3 -mb-2 rounded-b-lg">
                <button class="bg-red-400 hover:bg-red-700  text-white font-bold py-2 px-4 rounded">
                        <a href="{{ route('doador.index') }}">Voltar</a>
                    </button>
                    {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white  font-bold py-2 px-4 rounded">
                        Doar todos
                    </button> --}}
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
