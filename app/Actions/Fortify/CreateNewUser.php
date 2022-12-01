<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'cnpj' => ['nullable', 'string', 'max:16'],
            'cpf' => ['nullable', 'string', 'max:16'],
            'endereco' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string', 'max:3'],
            'cep' => ['required', 'string', 'max:10'],
            'complemento' => ['nullable', 'string', 'max:255'],
            'whatsapp' => ['nullable', 'string', 'max:255'],
            'tipo' => ['required', 'string', 'max:10'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'cnpj' => $input['cnpj'],
            'cpf' => $input['cpf'],
            'endereco' => $input['endereco'],
            'bairro' => $input['bairro'],
            'cidade' => $input['cidade'],
            'estado' => $input['estado'],
            'cep' => $input['cep'],
            'complemento' => $input['complemento'],
            'whatsapp' => $input['whatsapp'],
            'tipo' => $input['tipo'],

        ]);
    }
}
