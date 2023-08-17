<?php

namespace App\Http\Requests\Api\Campaign;

use Illuminate\Foundation\Http\FormRequest;

class StopCampaignRequest extends FormRequest
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
            'x_campaign_id'    => 'required',
        ];

        return $rules;
    }
}
