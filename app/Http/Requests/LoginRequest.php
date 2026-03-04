<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    
 public function rules(): array
    {
        return [
            
            'email'=>'bail|required|string',
            'password'=>'bail|required|string'
        ];
    }
    public function messages()
    {
            return[
           
            'email.required' => 'field is required',
            'password.required' => 'field is required',
         
            
            ];
    }
}
