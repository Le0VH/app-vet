<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MascotaRequest extends FormRequest
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
			'nombre_mascota' => 'string',
			'Especie' => 'string',
			'Raza' => 'string',
			'Tipo_Pelaje' => 'string',
			'Color_Pelaje' => 'string',
			'Fecha_Nacimiento' => 'required',
			'Fecha_Adopcion' => 'required',
			'Peso' => 'string',
			'Tipificacion_Sangre' => 'string',
			'Numero_Chip' => 'string',
			'Castracion' => 'string',
			'Fecha_Castracion' => 'required',
			'id_dueño' => 'required',
        ];
    }
}
