<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrando Aluno') }}
        </h2>
    </x-slot>

    <x-form action="{{ route('student.store') }}" method="POST">

        <x-card>
            @include('admin.student.formStudent')
            <div class="d-flex justify-content-end">
                <x-primary-button type="submit">Cadastrar</x-primary-button>
            </div>
        </x-card>

    </x-form>

</x-app-layout>