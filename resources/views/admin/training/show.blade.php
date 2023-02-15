<x-app-layout>

    <x-header>
        {{ __('Alunos') }}
    </x-header>

    <x-card>
        <p><strong>Aluno(a):</strong> {{ $training->student->name }}</p>
        <p><strong>Funcionário que agendou a aula:</strong> {{ $training->user->name }}</p>
        <p><strong>Data:</strong> {{ date("d/m/Y",strtotime(substr($training->start_date, 0, 10))) }}</p>
        <p><strong>Hora Início:</strong> {{ substr($training->start_date, 11, 5) }}</p>
        <p><strong>Hora Término:</strong> {{ substr($training->end_date, 11, 5) }}</p>
        <p><strong>Preço:</strong> R${{ $training->cost }}</p>
    </x-card>

</x-app-layout>