<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'numberphone' => 'required|string|regex:/^9\d{8}$/',
            'country' => 'required|string|max:100',
            'district' => 'required|string|max:100',
            'direction' => 'required|string|max:100',
            'password' => 'required|string|min:9',
        ];
    }
}
