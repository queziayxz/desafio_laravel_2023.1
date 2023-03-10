<x-app-layout>

    <x-header>
        <a href="{{ route('student.index') }}">
            {{ __('Informações do Aluno') }}
        </a>
    </x-header>

    <x-card>
        <p><strong class="text-show">Nome:</strong> {{ $student->name }}</p>
        <p><strong class="text-show">Email:</strong> {{ $student->email }}</p>
        <p><strong class="text-show">Data de Nascimento:</strong> {{ date('d/m/Y',strtotime($student->birth_date)) }}</p>
        <p><strong class="text-show">Endereço:</strong> {{ $student->address }}</p>
        <p><strong class="text-show">Telefone:</strong> {{ $student->phone_number }}</p>
        <p><strong class="text-show">Data de Cadastro:</strong> {{ date('d/m/Y',strtotime($student->register_date)) }}</p>
        <p><strong class="text-show">Data do Pagamento:</strong> {{ date('d/m/Y',strtotime($student->pay_day)) }}</p>
        <p><strong class="text-show">Data de Validade do Contrato:</strong> {{ date('d/m/Y',strtotime($student->expiration_date)) }}</p>
    </x-card>

</x-app-layout>