@extends('template/template')

@section('title','Cadastro de Escola')

@section('content')

<x-guest-layout>
    <x-auth-card>

        <h1 class="pt-11">Cadastro de Materiais</h1>
        <br>

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('escola.cadastroMaterial') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome do material')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- ID escola -->
            <div>
                <x-label for="id_escola" :value="__('Escola')" />
                <select class="form-control" name="id_escola">
                    @foreach($escolas as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection
