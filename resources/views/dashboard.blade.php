<x-guest-layout>
    
    
    <x-card>
        <h1 class="text-center mb-2">DASHBOARD</h1>

        <div class="d-flex flex-row justify-content-around flex-wrap">
            <div class="card mb-2" style="width: 18rem;">
                <a href="{{ route('user.index') }}" class="btn btn-primary">Vizualizar Funcioários</a>
            </div>
            <div class="card mb-2" style="width: 18rem;">
                <a href="{{ route('student.index') }}" class="btn btn-primary">Vizualizar Alunos</a>
            </div>
            <div class="card mb-2" style="width: 18rem;">
                <a href="{{ route('training.index') }}" class="btn btn-primary">Vizualizar Aulas</a>
            </div>
            <div class="card" style="width: 18rem;">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Visualizar Perfil</a>
            </div>
        </div>
    </x-card>

</x-guest-layout>
