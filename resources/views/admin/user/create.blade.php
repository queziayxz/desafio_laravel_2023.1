<x-app-layout>

    <x-header>
        <a href="{{ route('user.index') }}">
            {{ __('Cadastrando Funcionário') }}
        </a>
    </x-header>

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