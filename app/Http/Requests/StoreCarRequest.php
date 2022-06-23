<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            "code" => ['required', 'min:3'],
            "manufacturer" => ['required', 'min:2'],
            "model" => ['required', 'min:2', 'max:60'],
            "price" => ['required', 'min:4', 'regex:/^\d*( \. \d{2})?/']
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'code is required!' ,
            'manufacturer.required' => 'manufacturer is required!' ,
            'model.required' => 'model is required!',
            'price.required' => 'price is required!',
        ];
    }
}
