<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alunos') }}
        </h2>
    </x-slot>

    <x-card>

        <a href="{{ route('student.create') }}">
            <x-secondary-button class="btn-secondary">{{ __('Adiconar Aluno') }}</x-secondary-button> 
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ date('d/m/Y',strtotime($student->register_date))}}</td>
                        <td class="d-flex  justify-content-evenly">
                            <a href="{{ route('student.show',$student->id) }}">
                                <x-secondary-button class="btn-secondary"><i class="fas fa-search"></i></x-secondary-button>
                            </a>
                            <a href="{{ route('student.edit',$student->id) }}">
                                <x-primary-button class="btn-primary"><i class="fas fa-pen"></i></x-primary-button>
                            </a>
                            <form action="{{ route('student.destroy', $student->id) }}" method="post">
                            
                            @csrf
                            @method('delete')
                            <x-danger-button type="submit" class="btn-primary"><i class="fas fa-trash"></i></x-danger-button>

                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>

</x-app-layout>