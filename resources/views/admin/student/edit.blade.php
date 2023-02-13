<x-app-layout>

    <x-header>
        {{ __('Editando Aluno') }}
    </x-header>

    <x-card>
        <x-form action="{{ route('student.update',$student->id) }}" method="POST">
            @method('PUT')
            @include('admin.student.formStudent')
            @stack('js')
            <div class="text-end mt-4">
                <x-primary-button type="submit">Editar</x-primary-button>
            </div>
        </x-form>
    </x-card>


</x-app-layout>