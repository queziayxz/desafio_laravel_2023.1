<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Date;

class StoreStudentRequest extends FormRequest
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
            'email' => 'required|email|min:2|max:254|unique:students,email',
            'birth_date' => 'required|date|before:today',
            'address' => 'required|string|min:2|max:254',
            'phone_number' => 'required|celular_com_ddd',
            'register_date' => 'required|date|before_or_equal:today|after:birth_date',
            'pay_day' => 'required|date|after_or_equal:register_date',
            'expiration_date' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'email' => 'e-mail',
            'birth_date' => 'data de nascimento',
            'address' => 'endereço',
            'phone_number' => 'telefone',
            'register_date' => 'data de cadastro',
            'pay_day' => 'data do pagamento',
            'expiration_date' => 'contrato do aluno'
        ];
    }

    public function messages()
    {
        $today = \Carbon\Carbon::now()->format('d/m/Y');
        return [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute precisa ter no mínimo :min caracteres',
            'max' => 'O campo :attribute precisa ter no máximo :max caracteres',
            'email' => 'O campo :attribute precisa ser um email',
            'unique' => 'O campo :attribute já existe',
            'date' => 'O campo :attribute precisa ser uma data',
            'before' => 'O campo :attribute precisa ser antes do dia ' . $today,
            'before_or_equal' => 'O campo :attribute precisa ser antes ou igual' . $today,
            'after_or_equal' => 'O campo :attribute precisa ser depois ou igual a data de cadastro',
            'after' => 'O campo :attribute precisa ser depois da data de nascimento',
            'celular_com_ddd' => 'O campo :attribute precisa ser um valor com ddd válido'
        ];
    }
}
