<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentCreatedRequest extends FormRequest
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
            'descripcion' => 'required|string|max:300',
            'archivo' => 'required|file|max:5000|mimes:pdf,docx,doc,xls,xlt,xlsx',
            'anio' => 'required',
            'fecha' => 'required',
            'tipo_id' => 'required',
        ];
    }
}
