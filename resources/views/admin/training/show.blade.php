<x-app-layout>

    <x-header>
        <a href="{{ route('training.index') }}">
            {{ __('Treino') }}
        </a>
    </x-header>

    <x-card>
        <p><strong class="text-show">Aluno(a):</strong> {{ $training->student->name }}</p>
        <p><strong class="text-show">Funcionário que agendou a aula:</strong> {{ $training->user->name }}</p>
        <p><strong class="text-show">Data:</strong> {{ date("d/m/Y",strtotime(substr($training->start_date, 0, 10))) }}</p>
        <p><strong class="text-show">Hora Início:</strong> {{ substr($training->start_date, 11, 5) }}</p>
        <p><strong class="text-show">Hora Término:</strong> {{ substr($training->end_date, 11, 5) }}</p>
        <p><strong class="text-show">Preço:</strong> R${{ $training->cost }}</p>
    </x-card>

</x-app-layout>