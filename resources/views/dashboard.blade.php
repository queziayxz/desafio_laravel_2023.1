<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-card>
        <div class="card">
            <img src="../img/funcionarios.jpg" class="card-img-top" alt="Imagem dos funcioários">

            <div class="card-body">
                <a href="{{ route('user.index') }}" class="btn btn-primary">Vizualizar Funcioários</a>
            </div>
            </div>
        </div>
    </x-card>

</x-app-layout>
