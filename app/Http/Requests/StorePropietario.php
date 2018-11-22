<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StorePropietario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'cedula' => 'required|numeric',
            'descripcion' => 'required|min:3|max:1000',
            'telefono' => 'required|numeric',
        ];  
    }

    public function messages()
    {
        return [

            'nombre.required' => 'El campo Tipo es requerido',

            'cedula.required' => 'La cedula es obligatorio',
            'cedula.numeric' => 'El campo debe ser un número',

            'descripcion.required' => 'La descripción es obligatoria',
            'descripcion.min' => 'La descripción debe tener tres caracteres o más',
            'descripcion.max' => 'La descripción no puede tener más de 1000 caracteres',

            'telefono.required' => 'El telefono es obligatorio',
            'telefono.numeric' => 'El campo debe ser un número',

        ];
    }
}
