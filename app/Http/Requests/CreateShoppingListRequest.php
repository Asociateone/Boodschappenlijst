<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateShoppingListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array|string
    {
        return [
            'name' => 'max:255|string|required',
        ];
    }
}
