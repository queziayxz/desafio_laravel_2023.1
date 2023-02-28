<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Email') }}
        </h2>
    </x-slot>

    <x-card>
        <x-form action="{{ route('email.store') }}" method="POST">
            <div>
                <label for="content">Conteúdo do Email:</label>
                <textarea class="form-control" id="content" name="content" style="height: 100px"></textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>
            <div class="text-end mt-4">
                <x-primary-button type="submit">Enviar</x-primary-button>
            </div>
        </x-form>
    </x-card>

</x-app-layout>