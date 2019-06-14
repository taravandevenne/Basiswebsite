<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistsUpdateRequest extends FormRequest
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
            'style'=>'required',
            'started'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'The name is required!',
            'style.required' => 'Choose a style!',
            'started.required' => 'Start date is required!',

        ];
    }
}
