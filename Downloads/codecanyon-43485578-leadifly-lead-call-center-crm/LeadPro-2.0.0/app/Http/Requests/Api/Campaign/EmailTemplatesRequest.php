<?php

namespace App\Http\Requests\Api\Campaign;

use Illuminate\Foundation\Http\FormRequest;

class EmailTemplatesRequest extends FormRequest
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
            'x_lead_id' => 'required',
        ];
    }
}
