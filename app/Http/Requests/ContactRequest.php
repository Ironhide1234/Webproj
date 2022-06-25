<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest {

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'phone_num' => 'required|min:13|max:13',
            'name' => 'required|min:3|max:50'
            ];
    }

    public function messages(){
        return [
            'phone_num.required' => 'Поле телефон является обязятельным',
            'name.required' => 'Поле имя является обязательным'
        ];
    }
}
