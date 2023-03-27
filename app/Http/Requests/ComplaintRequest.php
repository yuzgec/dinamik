<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComplaintRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firma'                     => 'required|min:6|max:99',
        ];
    }

    public function messages()
    {
        return [
            'firma.required'            => 'Firma Adı giriniz',
            'firma.max'                 => 'Firma Adı en fazla 99 karakter olabilir',
            'firma.min'                 => 'Firma Adı en az 4 karakter olabilir',

        ];
    }
}
