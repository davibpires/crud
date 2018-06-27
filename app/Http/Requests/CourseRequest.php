<?php

namespace crud\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'code'          => 'required',
            'name'          => 'required',
            'institution'   => 'required'
        ];
    }

    public function messages() {
        return [
            'code.required'         => 'O campo Código é obrigatório',
            'name.required'         => 'O campo Nome é obrigatório',
            'institution.required'  => 'O campo Instituição é obrigatório'
        ];
    }

}
