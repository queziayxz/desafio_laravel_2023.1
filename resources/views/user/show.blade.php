<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funcionário') }}
        </h2>
    </x-slot>

    <x-card>
        @include('user.formUser')
    </x-card>

</x-app-layout>