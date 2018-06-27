<?php

namespace crud\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
            'name' => 'required',
            'course_id' => 'required|integer',
            'registration' => 'required|integer',
            'semester' => 'required|integer',
            'status' => ['required', Rule::in(['matriculado', 'trancado', 'jubilado'])]
        ];
    }

    public function messages() {
        return [
            'name.required' => 'O campo Nome é obrigatório',
            'course_id.required' => 'O campo Curso é obrigatório',
            'course_id.integer' => 'O campo Curso deve ser um inteiro',
            'registration.required' => 'O campo Matrícula é obrigatório',
            'registration.integer' => 'O campo Matrícula deve ser um inteiro',
            'semester.required' => 'O campo Semestre é obrigatório',
            'semester.integer' => 'O campo Semestre deve ser um inteiro',
            'status.required' => 'O campo Status é obrigatório',
            'status.in' => 'O campo Status precisa ser "mMtriculado", "Trancado" ou "Jubilado"'
        ];
    }
}
