<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if( $this -> path() == "login" ){

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
            "email" => " required | max:255 | email | string " ,
            "password" => " required | max:255 | string "
        ];
    }
}
