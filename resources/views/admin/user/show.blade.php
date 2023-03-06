<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funcionário') }}
        </h2>
    </x-slot>

    <x-card>
        <p><strong class="text-show">Nome: </strong>{{ $user->name }}</p>
        <p><strong class="text-show">E-mail: </strong>{{ $user->email }}</p>
        <p><strong class="text-show">Data de Nascimento: </strong>{{ $user->birth_date }}</p>
        <p><strong class="text-show">Endereço: </strong>{{ $user->address }}</p>
        <p><strong class="text-show">Telefone: </strong>{{ $user->phone_number }}</p>
        <p><strong class="text-show">Turno: </strong>{{ $user->work_time }}</p>
    </x-card>

</x-app-layout>