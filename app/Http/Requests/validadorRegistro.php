<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:users',
            'email' => 'required|email:rfc,dns|unique:users',
            'phone'=>'required|numeric',
            'password' => 'required|min:8',
            'confirm-password' => 'required|min:8|same:password'
        ];
    }
}
