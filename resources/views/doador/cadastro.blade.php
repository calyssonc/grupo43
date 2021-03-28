@extends('template/template')

@section('title','Cadastro de doador')

@section('content')

<x-guest-layout>
    <x-auth-card>

        <h1>Cadastro de doador</h1>
        <br>

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('doador.cadastro') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome do doador')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- CPF -->
            <div>
                <x-label for="cpf" :value="__('CPF do doador')" />

                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required />
            </div>

            <!-- Localização (ENREDEÇO) -->
            <div>
                <x-label for="localizacao" :value="__('Localização')" />

                <x-input id="localizacao" class="block mt-1 w-full" type="text" name="localizacao" :value="old('localizacao')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
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
