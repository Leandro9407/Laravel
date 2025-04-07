<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:30|min:3',
            'apellido' => 'required|max:30|min:3',
            'telefono' => 'required|max:10|min:10',
            'direccion' => 'required|max:50|min:3',
            'correo' => 'required|max:50|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'Campo de nombre obligatorio',
            'apellido.required' => 'Campo de apellido obligatorio',
            'telefono.required' => 'Campo de teléfono obligatorio',
            'direccion.required' => 'Campo de dirección obligatorio',
            'correo.required' => 'Campo de correo obligatorio',
        ];
    }

}