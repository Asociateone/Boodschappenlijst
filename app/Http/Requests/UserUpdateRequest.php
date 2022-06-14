<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array|string
    {
        return [
            'name' => 'string|max:50|min:2',
            'email' => 'email|max:50|min:2',
        ];
    }
}
