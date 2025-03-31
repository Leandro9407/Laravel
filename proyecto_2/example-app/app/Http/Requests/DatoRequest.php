<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatoRequest extends FormRequest
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
            'nombre' => 'required|max:20|min:3',
            'apellido' => 'required|max:20|min:3',
            'direccion' => 'required|max:20|min:3',
            'telefono' => 'required|max:10|min:3'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Nombre obligatorio',
            'apellido.required' => 'Apellido obligatorio',
            'direccion.required' => 'Dirección obligatorio',
            'telefono.required' => 'Teléfono obligatorio'
        ];
    }
}
