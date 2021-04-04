<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="banana" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="bananabanana.com" required />
            </div>

             <!-- Email Address -->
             <div class="mt-4">
                <x-label for="cpf" :value="__('cpf')" />

                <x-input id="cpf" class="block mt-1 w-full" type="number" name="cpf" value="12345678910" required />
            </div>

             <!-- Email Address -->
             <div class="mt-4">
                <x-label for="localizacao" :value="__('localizacao')" />

                <x-input id="localizacao" class="block mt-1 w-full" type="text" name="localizacao" value="meupirualadao,696969 - sp" required />
            </div>

             <!-- Email Address -->
             <div class="mt-4">
                <x-label for="telefone" :value="__('telefone')" />

                <x-input id="telefone" class="block mt-1 w-full" type="number" name="telefone" value="12345678911" required />
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
            <div class="mt-4">
                <x-label for="role_id" value="{{ __('Registrar como:') }}"/>
                <select name="role_id" class="block mt-1 w-full border-gray-300
                focus:border-indigo-300 focus:ring focus:ring-indigo-200
                focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="escola">Escola</option>
                    <option value="doador">Doador</option>
                    <option value="beneficiado">Beneficiado</option>
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
