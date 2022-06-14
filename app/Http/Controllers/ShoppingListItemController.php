<?php

namespace App\Http\Controllers;

use App\Models\ShoppinglistItem;
use App\Http\Requests\ShoppingListItemRequest;
use Illuminate\Http\Request;

class ShoppingListItemController extends Controller
{
    public function update(ShoppingListItemRequest $request)
    {
        return $request->validated();
    }

    public function destroy()
    {
    }
}
