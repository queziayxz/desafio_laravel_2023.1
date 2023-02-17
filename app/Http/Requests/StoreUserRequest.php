<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:254',
            'email' => 'required|email|min:2|max:254|unique:users,email',
            'birth_date' => 'nullable|date',
            'address' => 'nullable|string|min:2|max:254',
            'phone_number' => 'nullable|celular_com_ddd',
            'work_time' => 'required|string',
            'password' => 'required|min:6|max:20',
            'type' => 'nullable|max:1|integer'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'email' => 'e-mail',
            'birth_date' => 'data de nascimento',
            'address' => 'endereço',
            'phone_number' => 'número de telefone',
            'phone_number' => 'número de telefone',
            'work_time' => 'turno',
            'password' => 'senha',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute precisa ter no mínimo :min caractes',
            'max' => 'O campo :attribute precisa ter no máximo :max caracteres',
            'email' => 'O campo :attribute precisa ser um email',
            'unique' => 'O campo :attribute já está cadastrado',
        ];
    }
}
