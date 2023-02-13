<x-app-layout>

    <x-header>
        {{ __('Editando Aluno') }}
    </x-header>

    <x-card>
        <x-form action="{{ route('student.update',$student->id) }}" method="GET">
            @include('admin.student.formStudent')
            @stack('js')
        </x-form>
    </x-card>


</x-app-layout>