<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editando Funcionário') }}
        </h2>
    </x-slot>

    <x-card>
        <x-form action="{{ route('user.update',$user->id) }}" method="POST"> 
    
            @method('PUT')
            @include('admin.user.formUser')
            @stack('js')
            <div class="text-end mt-4">
                <x-primary-button type="submit">Editar</x-primary-button>
            </div>
    
    
        </x-form>
    </x-card>

</x-app-layout>