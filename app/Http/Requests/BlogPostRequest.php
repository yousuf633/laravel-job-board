<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
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
            'title'=>"bail|required|unique:post,title,{$this->id}",
            'author'=>'required',
            'body'=>'required'

        ];
    }
    public function messages()
    {
            return['title.required' => 'field is required',
            'author.required' => 'field is required',
            'body.required' => 'field is required'];
    }
}
