<x-app-layout>

    <x-header>
        <a href="{{ route('student.index') }}">
            {{ __('Cadastrando Aluno') }}
        </a>
    </x-header>

    <x-form action="{{ route('student.store') }}" method="POST">

        <x-card>
            @include('admin.student.formStudent')
            <div class="d-flex justify-content-end">
                <x-primary-button type="submit">Cadastrar</x-primary-button>
            </div>
        </x-card>

    </x-form>

</x-app-layout>