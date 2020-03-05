<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsCreatedRequest extends FormRequest
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
            'titulo' => 'required|string|max:100',
            'url' => 'required|string|max:250',
            'imagen' => 'required|image|max:3000|mimes:jpeg,jpg,png',
        ];
    }
}
