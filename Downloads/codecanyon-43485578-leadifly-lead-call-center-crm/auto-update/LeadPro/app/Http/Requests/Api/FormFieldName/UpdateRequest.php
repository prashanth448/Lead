<?php

namespace App\Http\Requests\Api\FormFieldName;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

        $rules = [
            'field_name' => 'required',
            'similar_field_names'  => 'required',
            'visible' => 'required'
        ];

        return $rules;
    }
}
