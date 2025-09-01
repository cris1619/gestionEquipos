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
            'fecha_fundacion_equipo' => 'required | date | before:today',
            'liga_equipo' => 'required | string | max:255 | min:3'
        ];
    }

    public function messages(): array
    {
        return [
            'nombre_equipo.required' => 'El nombre es obligatorio',
            'nombre_equipo.string' => 'El nombre debe ser una cadena de texto',
            'nombre_equipo.max' => 'El nombre no puede tener más de 255 caracteres',
            'nombre_equipo.min' => 'El nombre debe tener al menos 3 caracteres',
            'ciudad_equipo.string' => 'La ciudad debe ser una cadena de texto',
            'ciudad_equipo.max' => 'La ciudad no puede tener más de 255 caracteres',
            'ciudad_equipo.required' => 'La ciudad es obligatoria',
            'ciudad_equipo.min' => 'La ciudad debe tener al menos 3 caracteres',
            'pais_equipo.string' => 'El país debe ser una cadena de texto',
            'pais_equipo.required' => 'El país es obligatorio',
            'pais_equipo.max' => 'El país no puede tener más de 255 caracteres',
            'pais_equipo.min' => 'El país debe tener al menos 3 caracteres',
            'fecha_fundacion_equipo.required' => 'La fecha de fundación es obligatoria',
            'liga_equipo.required' => 'La liga del equipo es requerida',
            'liga_equipo.string' => 'La liga del equipo debe ser una cadena de texto',
            'liga_equipo.max' => 'La liga del equipo no puede tener más de 255 caracteres',
            'liga_equipo.min' => 'La liga del equipo debe tener al menos 3 caracteres',
        ];
    }
}
