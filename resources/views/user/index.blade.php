<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('user.create') }}">
                        <x-secondary-button class="btn-secondary">{{ __('Adiconar Funcionário') }}</x-secondary-button> 
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Turno</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->work_time ?? "" }}</td>
                                    <td class="options">
                                        <a href="{{ route('user.show',$user->id) }}">
                                            <x-secondary-button class="btn-secondary"><i class="fas fa-search"></i></x-secondary-button>
                                        </a>
                                        <a href="{{ route('user.edit',$user->id) }}">
                                            <x-primary-button class="btn-primary"><i class="fas fa-pen"></i></x-primary-button>
                                        </a>
                                        <a href="{{ route('user.destroy',$user->id) }}">
                                            <x-danger-button type="submit" class="btn-primary"><i class="fas fa-trash"></i></x-danger-button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>