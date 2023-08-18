<?php

namespace App\Http\Requests\Api\Campaign;

use Illuminate\Foundation\Http\FormRequest;

class TakeLeadActionRequest extends FormRequest
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
            'action_type'    => 'required',
            'call_log_id'    => 'required',
            'x_lead_id'    => 'required',
            'call_time'    => 'required',
        ];

        return $rules;
    }
}
