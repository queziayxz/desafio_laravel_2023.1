<x-app-layout>
    <x-header>
        <a href="{{ route('user.index') }}">
            {{ __('Funcionário') }}
        </a>
    </x-header>

    <x-card>
        <p><strong class="text-show">Nome: </strong>{{ $user->name }}</p>
        <p><strong class="text-show">E-mail: </strong>{{ $user->email }}</p>
        <p><strong class="text-show">Data de Nascimento: </strong>{{ date('d/m/Y',strtotime($user->birth_date)) }}</p>
        <p><strong class="text-show">Endereço: </strong>{{ $user->address }}</p>
        <p><strong class="text-show">Telefone: </strong>{{ $user->phone_number }}</p>
        <p><strong class="text-show">Turno: </strong>{{ $user->work_time }}</p>
    </x-card>

</x-app-layout>