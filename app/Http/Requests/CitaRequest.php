<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'especialidad_id' => 'exists:especialidads,id',
            'medico_id' => 'exists:users,id',
            'paciente_id' => 'exists:users,id',
            'hora_programada' => 'required',
            'fecha_programada' => 'required',
        ];
    }
}
