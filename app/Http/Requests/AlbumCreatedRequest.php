<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumCreatedRequest extends FormRequest
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
            'descripcion' => 'required|string|max:250',
            'fecha' => 'required',
            'imagen' => 'required|image|max:3000|mimes:jpeg,jpg,png',
        ];
    }
}
