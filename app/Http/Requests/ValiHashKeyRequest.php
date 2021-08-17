<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiHashKeyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // if($this->path() == "/reminder/hashKey"){
        //     return true;
        // }

        // return false;

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
            'email' => 'required | email | string',
            'hashKey' => 'required | string '
        ];
    }
}
