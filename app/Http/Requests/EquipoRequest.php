<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
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
            'nombre_equipo' => 'required | string | max:255 | min:3' ,
            'ciudad_equipo' => 'required | string | max:255 | min:3',
            'pais_equipo' => 'required | string | max:255 | min:3', 
            'fecha_fundacion_equipo' => 'required | date | before:2025-09-26',
            'liga_equipo' => 'required | string | max:255 | min:3'
        ];
    }
}
