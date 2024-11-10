<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeterinarioRequest extends FormRequest
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
			'ID' => 'required',
			'Nombre_Veterinario' => 'string',
			'Apellido_Veterinario' => 'string',
			'Especialialidad_Veterinario' => 'string',
			'Direccion_Veterinario' => 'string',
			'telefono_Veterinario' => 'string',
			'Contacto_Emergencia_Vet' => 'string',
			'Email_Veterinario' => 'string',
			'Clinicas' => 'string',
        ];
    }
}
