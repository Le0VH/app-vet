<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacunaRequest extends FormRequest
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
			'Nombre_Vacuna' => 'string',
			'Dosis' => 'string',
			'Observaciones' => 'string',
			'Laboratorio' => 'string',
        ];
    }
}