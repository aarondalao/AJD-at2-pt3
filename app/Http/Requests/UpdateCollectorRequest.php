<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCollectorRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "given name" => ['min:2'],
            "family_name" => ['required', 'min:2'],
            "cars" => [],
        ];
    }
    /*
     *
     *  set all custom messages for this request
     *  @return array<string, mixed>
     *
     * */

    public function messages()
    {
        return [
            'given_name.min' => 'given name minimum length is not met!' ,
            'family_name.required' => 'family name is required!' ,
            'family_name.min' => 'family name minimum length is not met!',
        ];
    }

}
