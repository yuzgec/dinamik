<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'company_name'               => 'required|min:6|max:99',
            'company_officer'            => 'required',
            'company_phone'              => 'required|numeric|digits_between:10,11',
            'company_email'              => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'company_name.required'            => 'Firma Adı giriniz',
            'company_name.max'                 => 'Firma Adı en fazla 99 karakter olabilir',
            'company_name.min'                 => 'Firma Adı en az 4 karakter olabilir',

            'company_officer.required'         => 'Firma Yetkili Adı giriniz',
            'company_email.required'           => 'Firma Email giriniz',
            'company_email.email'              => 'Geçerli bir email adresi giriniz.',

            'company_phone.required'           => 'Telefon alanı boş bırakılamaz',
            'company_phone.numeric'            => 'Telefon sadece rakamlardan oluşabilir',
            'company_phone.digits_between'     => 'Geçerli bir telefon numarası giriniz',
        ];
    }
}
