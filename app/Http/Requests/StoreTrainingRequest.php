<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingRequest extends FormRequest
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
            'start_date' => 'required|after:today|unique:trainings,start_date',
            'end_date' => 'required|after:start_date',
            'cost' => 'required|numeric',
            'student_id' => 'required|exists:students,id',
            'user_id' => 'required|integer|exists:users,id'
        ];
    }

    public function attributes()
    {
        return [
            'start_date' => 'data e hora inicial',
            'end_date' => 'data e hora final',
            'cost' => 'valor da aula',
            'student_id' => 'aluno',
            'user_id' => 'funcionário'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'date_format' => 'O campo :attribute precisa estar no formato Y-m-d H:i:s',
            'after' => 'O campo :attribute precisa ser depois da ::after',
            'unique' => 'Este horário já está agendado para outro aluno',
            'numeric' => 'O campo :attribute precisa ser um número',
            'exists' => 'O campo :attribute não existe',
            'integer' => 'O campo :attribute precisa ser um valor inteiro',
        ];
    }
}
