<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nome') }}" class="text-white text-lg" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" class="text-white text-lg" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="cnpj" value="{{ __('CNPJ') }}" class="text-white text-lg" />
                <x-jet-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" :value="old('cnpj')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="cpf" value="{{ __('CPF') }}" class="text-white text-lg" />
                <x-jet-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="endereco" value="{{ __('Endereço') }}" class="text-white text-lg" />
                <x-jet-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="bairro" value="{{ __('Bairro') }}" class="text-white text-lg" />
                <x-jet-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="cidade" value="{{ __('Cidade') }}" class="text-white text-lg" />
                <x-jet-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="estado" value="{{ __('Estado') }}" class="text-white text-lg" />
                <x-jet-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="numero" value="{{ __('Número') }}" class="text-white text-lg" />
                <x-jet-input id="numero" class="block mt-1 w-full" type="text" name="numero" :value="old('numero')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="cep" value="{{ __('CEP') }}" class="text-white text-lg" />
                <x-jet-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="complemento" value="{{ __('Complemento') }}" class="text-white text-lg" />
                <x-jet-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="whatsapp" value="{{ __('Whatsapp') }}" class="text-white text-lg" />
                <x-jet-input id="whatsapp" class="block mt-1 w-full" type="text" name="whatsapp" :value="old('whatsapp')"  />
            </div>

            <div class="mt-4 text-white">
                <x-jet-label for="tipo" value="{{ __('Tipo de usuário') }}" class="text-white" />
                <x-jet-input id="tipo1" class="mt-1" type="radio" name="tipo" value="doador" required /> Doador &nbsp;
                <x-jet-input id="tipo2" class="mt-1" type="radio" name="tipo" value="donatario" required /> Donatário
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Senha') }}" class="text-white text-lg" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar senha') }}" class="text-white text-lg" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-sky-400" href="{{ route('login') }}">
                    {{ __('Já possui uma conta?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Cadastrar-se') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
