<x-app-layout>
    
    <x-header>
        {{ __('Lista de Funcionários') }}
    </x-header>

    <x-card>
        
            <a href="{{ route('user.create') }}">
                <x-secondary-button class="btn-secondary">{{ __('Adiconar Funcionário') }}</x-secondary-button> 
            </a>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Tipo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @if($user->type == 1)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->work_time ?? "" }}</td>
                            <td>{{ $user->type }}</td>
                            <td class="d-flex  justify-content-evenly">
                                <a href="{{ route('user.show',$user->id) }}">
                                    <x-secondary-button class="btn-secondary"><i class="fas fa-search"></i></x-secondary-button>
                                </a>
                                <a href="{{ route('user.edit',$user->id) }}">
                                    <x-primary-button class="btn-primary"><i class="fas fa-pen"></i></x-primary-button>
                                </a>
                                
                                    @can('delete',$user)
                                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <x-danger-button type="submit" class="btn-primary"><i class="fas fa-trash"></i></x-danger-button>
                                        </form>
                                    @endcan
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </x-card>
                    
</x-app-layout>