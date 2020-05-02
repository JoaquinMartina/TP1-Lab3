<?php

namespace Presentation\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendTimeDepositsFormRequest extends FormRequest
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
            'surname' => 'required',
            'amountDeposited' => 'required|numeric|min:1000',
            'days' => 'required|numeric|min:30',
        ];
    }
}
