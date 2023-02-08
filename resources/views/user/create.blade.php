<x-app-layout>

    <x-form action="{{ route('user.store') }}" method="POST">
        <x-card>
            @include('user.formUser')
            <div class="text-end mt-4">
                <x-primary-button type="submit">Cadastrar</x-primary-button>
            </div>
        </x-card>
    </x-form>

</x-app-layout>