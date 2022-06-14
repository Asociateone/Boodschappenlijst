<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shoppinglist;
use App\Models\ShoppinglistItem;
use App\Http\Requests\ShoppingListItemRequest;

class ShoppingListItemController extends Controller
{
    public function update(ShoppingListItemRequest $request, User $user, Shoppinglist $shoppinglist, ShoppinglistItem $item): array
    {
        $item->update($request->validated());

        return ['message' => 'the item has been updated'];
    }

    public function destroy(User $user, Shoppinglist $shoppinglist, ShoppinglistItem $item): array
    {
        $item->delete();

        return ['message' => 'the item has been removed from your shoppinglist'];
    }
}
