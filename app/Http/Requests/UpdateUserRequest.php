<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:80',
            'current_password' =>'required|string|max:255',
            'password' =>'required|min:6|max:255',
        ];
    }
}
