<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiResetPassword extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == "reminder/reset"){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required | string | confirmed | max:255'
        ];
    }
}
