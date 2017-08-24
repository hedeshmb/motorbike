<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorbikeRequest extends FormRequest
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
            'name'              => 'required|max:255',
            'make'              => 'required|max:255',
            'modelMotorbike'    => 'required|unique:motorbikes',
            'engineSize'        => 'required|integer',
            'year'              => 'required|integer',
            'color'             => 'required|max:255',
            'weight'            => 'required|integer',
            'price'             => 'required|integer',
            'image'             => 'mimes:jpg,png,bmp,jpeg,'
        ];
    }
}
