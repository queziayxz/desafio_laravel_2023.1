
        <h2 class="text-center mt-2 mb-2">Cadastrando Funcionário</h2>
        <!-- Email Address -->
        <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$user->name)" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
                <x-input-label for="email" class="mt-2" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email',$user->email)" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
                <x-input-label for="birth_date" class="mt-2" :value="__('Data de Nascimento')" />
                <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date',$user->birth_date)" required autofocus />
                <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
        </div>
        <div>
                <x-input-label for="address" class="mt-2" :value="__('Endereço')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address',$user->address)" required autofocus />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <div>
                <x-input-label for="phone_number" class="mt-2" :value="__('Telefone')" />
                <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number',$user->phone_number)" required autofocus />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="work_time" class="mt-2" :value="__('Turno')" />
            <x-text-input id="work_time" class="block mt-1 w-full" type="text" name="work_time" :value="old('work_time',$user->work_time)" required autofocus />
            <x-input-error :messages="$errors->get('work_time')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="password" class="mt-2" :value="__('Senha')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password',$user->password)" required autofocus />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <x-text-input type="number" id="type" name="type" hidden value="0"/>
