<x-app-layout>

    <x-header>
        {{ __('Treinos') }}
    </x-header>

    <x-card>
        <a href="{{ route('training.create') }}">
            <x-secondary-button class="btn-secondary">{{ __('Agendar Aula') }}</x-secondary-button> 
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Aluno</th>
                    <th scope="col">Funcionário</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($trainings as $training)
                    <tr>
                        <td>{{ $training->student->name }}</td>
                        <td>{{ $training->user->name }}</td>
                        <td>{{ date("d/m/Y",strtotime(substr($training->start_date, 0, 10))) }}</td>
                        <td>{{ substr($training->start_date, 11, 5) }}</td>
                        <td class="d-flex  justify-content-evenly">
                            <a href="{{ route('training.show',$training->id) }}">
                                <x-secondary-button class="btn-secondary"><i class="fas fa-search"></i></x-secondary-button>
                            </a>
                            <a href="{{ route('training.edit',$training->id) }}">
                                <x-primary-button class="btn-primary"><i class="fas fa-pen"></i></x-primary-button>
                            </a>
                            <x-form action="{{ route('training.destroy', $training->id) }}" method="POST">
                            
                                @csrf
                                @method('delete')
                                <x-danger-button type="submit" class="btn-primary"><i class="fas fa-trash"></i></x-danger-button>

                        </x-form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>

</x-app-layout>