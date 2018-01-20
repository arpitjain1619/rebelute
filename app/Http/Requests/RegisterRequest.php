<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'username' => 'required|min:6|max:10',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'contact' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Name is required',
            'username.min' => 'Name must be greater than 6 characters',
            'username.max' => 'Name must be less than 10 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email field is not a valid email',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be greater than 6 characters',
            'contact.required' => 'Contact is required',
        ];
    }
}
