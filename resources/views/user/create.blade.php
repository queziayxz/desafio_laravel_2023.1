<x-app-layout>

    <x-form action="{{ route('user.store') }}" method="POST">
        <x-card>
            <h2 class="text-center mt-2 mb-2">Cadastrando Funcionário</h2>
            @include('user.formUser')
            <div class="text-end mt-4">
                <x-primary-button type="submit">Cadastrar</x-primary-button>
            </div>
        </x-card>
    </x-form>

</x-app-layout>