<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'brand'=>'required|min:3|max:25',
            'model'=>'required|min:3|max:25',
            'img'=>'required|min:3|max:15',
            'price'=>'required|min:3|max:15',
            'year'=>'required|min:3|max:15',
        ];
    }
}
