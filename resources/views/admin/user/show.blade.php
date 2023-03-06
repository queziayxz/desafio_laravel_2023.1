<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funcionário') }}
        </h2>
    </x-slot>

    <x-card>
        <p><strong>Nome: </strong>{{ $user->name }}</p>
        <p><strong>E-mail: </strong>{{ $user->email }}</p>
        <p><strong>Data de Nascimento: </strong>{{ $user->birth_date }}</p>
        <p><strong>Endereço: </strong>{{ $user->address }}</p>
        <p><strong>Telefone: </strong>{{ $user->phone_number }}</p>
        <p><strong>Turno: </strong>{{ $user->work_time }}</p>
    </x-card>

</x-app-layout>