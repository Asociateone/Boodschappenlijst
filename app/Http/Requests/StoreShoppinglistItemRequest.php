<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShoppinglistItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array|string
    {
        return [
            'product_id' => 'integer|required',
            'amount' => "integer|required",
        ];
    }
}
