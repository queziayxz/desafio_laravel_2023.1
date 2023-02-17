
        <!-- NOME -->
        <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$user->name)" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- EMAIL -->
        <div>
                <x-input-label for="email" class="mt-2" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email',$user->email)" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- DATA DE NASCIMENTO -->
        <div>
                <x-input-label for="birth_date" class="mt-2" :value="__('Data de Nascimento')" />
                <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date',$user->birth_date)" required autofocus />
                <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
        </div>

        <!-- ENDEREÇO -->
        <div>
                <x-input-label for="address" class="mt-2" :value="__('Endereço')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address',$user->address)" required autofocus />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- NÚMERO DE TELEFONA -->
        <div>
                <x-input-label for="phone_number" class="mt-2" :value="__('Telefone')" />
                <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" placeholder="(99)99999-9999" :value="old('phone_number',$user->phone_number)" required autofocus />
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- TURNO EM QUE TRABALHA -->
        <div>
                <x-input-label for="work_time" class="mt-2" :value="__('Turno do Funcionário')" />
                <select name="work_time" id="work_time" value="{{ old('work_time', $user->work_time ?? null) }}">
                <option value="">Selecione um Turno</option>
                @foreach(App\Models\User::turnos as $turno)
                        <option value="{{ $turno }}">{{ $turno }}</option>
                @endforeach
                </select>
                <x-input-error :messages="$errors->get('work_time')" class="mt-2" />
        </div>

        <!-- SENHA -->
        <div>
            <x-input-label for="password" class="mt-2" :value="__('Senha')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password',$user->password)" required autofocus />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- TIPO, SE O USUÁRIO É ADMIN OU FUNCIONÁRIO -->
        <x-text-input id="type" type="number" name="type" hidden value="1"/>

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
                        ValorSelecionado('work_time')
                }
        </script>

@endpush
