<x-app-layout>

    <x-header>
        <h2>Agendando Aula</h2>
    </x-header>

    <x-card>
        <x-form action="{{ route('training.store') }}" method="POST">
            @include('admin.training.formTraining')
            <div class="d-flex justify-content-end">
                <x-primary-button type="submit">Agendar</x-primary-button>
            </div>
        </x-form>
    </x-card>

</x-app-layout>