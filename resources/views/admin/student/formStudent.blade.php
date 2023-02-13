
        <!-- NOME -->
        <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$student->name)" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- EMAIL -->
        <div>
                <x-input-label for="email" class="mt-2" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email',$student->email)" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- DATA DE NASCIMENTO -->
        <div>
                <x-input-label for="birth_date" class="mt-2" :value="__('Data de Nascimento')" />
                <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date',$student->birth_date)" required autofocus />
                <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
        </div>

        <!-- ENDEREÇO -->
        <div>
                <x-input-label for="address" class="mt-2" :value="__('Endereço')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address',$student->address)" required autofocus />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- NÚMERO DO TELEFONE -->
        <div>
                <x-input-label for="phone_number" class="mt-2" :value="__('Telefone')" />
                <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number',$student->phone_number)" required autofocus />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- DATA DO CADASTRO -->
        <div>
            <x-input-label for="register_date" class="mt-2" :value="__('Data de Cadastro')" />
            <x-text-input id="register_date" class="block mt-1 w-full" type="date" name="register_date" :value="old('register_date',$student->register_date)" required autofocus />
            <x-input-error :messages="$errors->get('register_date')" class="mt-2" />
        </div>

        <!-- DATA DO PAGAMENTO -->
        <div>
            <x-input-label for="pay_day" class="mt-2" :value="__('Data do Pagamento')" />
            <x-text-input id="pay_day" class="block mt-1 w-full" type="date" name="pay_day" :value="old('pay_day',$student->pay_day)" required autofocus />
            <x-input-error :messages="$errors->get('pay_day')" class="mt-2" />
        </div>

        <!-- DATA DE VALIDADE -->
        <x-input-label for="expiration_date" class="mt-2" :value="__('Contrato do Aluno')" />
        <select name="expiration_date[]" id="expiration_date" value="{{ json_encode(old('expiration_date', $student->pluck('id'))) }}">
            <option value="" selected>Selecione uma validade</option>
            <option {{ $student->id != null ? 'selected' : "" }} value="1">Dia</option>
            <option {{ $student->id != null ? 'selected' : "" }} value="2">Semana</option>
            <option {{ $student->id != null ? 'selected' : "" }} value="3">Mês</option>
        </select>

        <!--
        <div>
            <x-input-label for="expiration_date" class="mt-2" :value="__('Contrato do Aluno')" />
            <div class="d-flex justify-content-start align-items-center">
                <x-input-label for="expiration_date" class="mt-2 mr-2" :value="__('Dia')" />
                <x-text-input type="radio" id="expiration_date" class="form-check-input"  name="expiration_date[]" value="+1 day" required autofocus />
            </div>
            <div class="d-flex justify-content-start align-items-center">
                <x-input-label for="expiration_date" class="mt-2 mr-2" :value="__('Mês')" />
                <x-text-input type="radio" id="expiration_date" class="form-check-input"  name="expiration_date[]" value="+1 month" required autofocus />
            </div>
            <div class="d-flex justify-content-start align-items-center">
                <x-input-label for="expiration_date" class="mt-2 mr-2" :value="__('Semana')" />
                <x-text-input type="radio" id="expiration_date" class="form-check-input"  name="expiration_date[]" value="+1 week" required autofocus />
            </div>
            <x-input-error :messages="$errors->get('expiration_date')" class="mt-2" />
        </div>
-->

@push('js')
<script>
        function selectOption(id) {
            const select = document.querySelector("#"+id);
            const children = select.children;
            for(let child of children) {
                if(child.value === select.getAttribute("value")) {
                    child.setAttribute("selected", true);
                }
            }
        }

        window.onload = () => {
            selectOption("cargo_id");
        }
    </script>
@endpush