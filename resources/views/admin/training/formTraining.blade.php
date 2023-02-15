@csrf

<!-- DATA E HORA DE INÍCIO -->
<div>
    <x-input-label for="start_date" :value="__('Data e hora inicial do treino')" />
    <x-text-input id="start_date" 
        class="block mt-1 w-full" 
        type="datetime-local" 
        name="start_date"
        min="2017-01-01T06:00"
        max="YYYY-mm-ddT23:00"
        pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}"
        :value="old('start_date',$training->start_date)" 
        required autofocus />
    <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
</div>

<!-- DATA E HORA FINAL -->
<div>
    <x-input-label for="end_date" class="mt-2" :value="__('Data e hora final do treino')" />
    <x-text-input id="end_date" 
        class="block mt-1 w-full" 
        type="datetime-local" 
        name="end_date"
        min="2017-01-01T06:00"
        max="YYYY-mm-ddT23:00"
        pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}"
        :value="old('end_date',$training->end_date)" 
        required autofocus />
    <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
</div>

<!-- VALOR DA AULA -->
<div>
    <x-input-label for="cost" class="mt-2" :value="__('Valor da Aula')" />
    <x-text-input id="cost" class="block mt-1 w-full" type="number" name="cost" :value="old('cost',$training->cost)" required autofocus />
</div>

<!-- ALUNO QUE IRÁ FAZER A AULA -->
<div>
    <x-input-label for="student_id" class="mt-2" :value="__('Aluno')" />
    <select name="student_id" id="student_id" value="{{ old('student_id',$training->student->id ?? null) }}">
        <option>Selecione um aluno</option>
        @foreach($students as $student)]
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
    </select>
</div>

<!-- FUNCIOÁRIO QUE MARCOU A AULA -->
<x-text-input id="user_id" class="block mt-1 w-full" hidden name="user_id" value="{{ Auth::user()->id }}" required />

@push('js')

        <script>
                function ValorSelecionado(id)
                {
                        const select = document.querySelector('#'+id);
                        const childrem = select.children;
                        console.log(select.getAttribute('value'));
                        for(let child of childrem){
                                if(child.value == select.getAttribute("value")) {
                                        child.setAttribute("selected", true);
                                }
                                
                        }
                }

                window.onload = () => {
                        ValorSelecionado('student_id')
                }
        </script>

@endpush

    