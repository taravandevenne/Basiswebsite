<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvancesUpdateRequest extends FormRequest
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
            'name'=>'required|string',
            'range'=>'required',
            'amount'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'The name is required!',
            'range.required' => 'The range is required!',
            'amount.required' => 'An amount is required!',

        ];
    }
}
