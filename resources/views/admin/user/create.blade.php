<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrando Funcionário') }}
        </h2>
    </x-slot>

    <x-form action="{{ route('user.store') }}" method="POST">
        <x-card>
            <h2 class="text-center mt-2 mb-2">Cadastrando Funcionário</h2>
            @include('admin.user.formUser')
            <div class="text-end mt-4">
                <x-primary-button type="submit">Cadastrar</x-primary-button>
            </div>
        </x-card>
    </x-form>

</x-app-layout>