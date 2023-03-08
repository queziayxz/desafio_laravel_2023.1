<x-app-layout>

    <x-header>
        <a href="{{ route('training.index') }}">
            {{ __('Editando Treino') }}
        </a>
    </x-header>

    <x-card>
        <x-form action="{{ route('training.update',$training->id) }}" method="POST">
            @method('PUT')
            @include('admin.training.formTraining')
            @stack('js')
            <div class="d-flex justify-content-end">
                <x-primary-button type="submit">Editar</x-primary-button>
            </div>

        </x-form>
    </x-card>

</x-app-layout>