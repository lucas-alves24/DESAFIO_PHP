<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required',
            'sobrenome' => 'required',
            'email' => 'required|email|unique:list_users,email',
            'telefone' => 'required|integer',
            'data_de_nascimento' => 'required|date',
            'password' => 'required|min:8'
        ];
    }

    public function messages(): array
    {
        return[
            'email.unique' => 'O endereço de e-mail já está sendo utilizado. Por favor, escolha outro.',
            'name.required' => 'O campo nome é obrigatório.',
            'sobrenome.required' => 'O campo sobrenome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Por favor, insira um endereço de e-mail válido.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'telefone.integer' => 'O campo telefone deve ser um número inteiro.',
            'data_de_nascimento.required' => 'O campo data de nascimento é obrigatório.',
            'data_de_nascimento.date' => 'O campo data de nascimento deve ser uma data válida.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo :min caracteres.',

        ];
    }
}
