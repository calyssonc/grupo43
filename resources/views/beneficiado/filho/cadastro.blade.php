@extends('template/template')

@section('title','Cadastro de beneficiado')

@section('content')

<x-guest-layout>
    <x-auth-card>

        <h1>Cadastro de Filho</h1>
        <br>

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('filho.cadastro') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome do filho')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- RA -->
            <div class="mt-4">
                <x-label for="ra" :value="__('RA')" />

                <x-input id="ra" class="block mt-1 w-full" type="text" name="ra" :value="old('ra')" required />
            </div>

            <!-- ID escola -->
            <div>
                <x-label for="id_escola" :value="__('id_escola')" />

                <x-input id="id_escola" class="block mt-1 w-full" type="text" name="id_escola" :value="old('id_escola')" required />
            </div>

            <!-- Escolher o tipo de usuário -->
            {{-- <div class="mt-4">
                <x-label for="role_id" value="{{ __('Registrar como:') }}"/>
                <select name="role_id" class="block mt-1 w-full border-gray-300
                focus:border-indigo-300 focus:ring focus:ring-indigo-200
                focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="escola">Escola</option>
                    <option value="doador">Doador</option>
                    <option value="beneficiado">Beneficiado</option>
                </select>
            </div> --}}

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
