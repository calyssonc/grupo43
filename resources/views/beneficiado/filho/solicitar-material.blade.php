@extends('template/template')

@section('title','Cadastro de beneficiado')

@section('content')

<x-guest-layout>
    <x-auth-card>

        <h1>Solicitar Material</h1>
        <br>

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('filho.storeSolicitarMaterial') }}">
            @csrf

            <!-- Material que será solicitado -->
            <div>
                <x-label for="id_material" :value="__('Material')" />
                <select class="form-control" name="id_material">
                    @foreach($filho->escola->material as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Filho que está solicitando o material -->
            <div>
                {{-- <x-label for="id_filho" :value="__('Filho')" />
                <select class="form-control" name="id_filho">
                    @foreach($filhos as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select> --}}
                <input type="hidden" name="id_filho" id="id_filho" value="{{ $filho->id }}">
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Solicitar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection
