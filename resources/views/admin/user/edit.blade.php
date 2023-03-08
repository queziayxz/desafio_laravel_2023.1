<x-app-layout>

    <x-header>
        <a href="{{ route('user.index') }}">
            {{ __('Editando Funcionário') }}
        </a>
    </x-header>

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