<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'bail|required|string',
            'email'=>'bail|required|string|unique:users',
            'password'=>'bail|required|string|min:8|confirmed'
        ];
    }
    public function messages()
    {
            return[
            'name.required' => 'field is required',
            'email.required' => 'field is required',
            'password.required' => 'field is required',
            'password_confirmation'=>'field is required '
            
            ];
    }
}
