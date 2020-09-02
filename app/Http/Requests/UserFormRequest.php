<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [ 
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'rol' => 'required',
            'password' => 'required|min:6|confirmed',
            'imagen' => 'mimes:jpeg,bmp,png'
        ];
    }
}
