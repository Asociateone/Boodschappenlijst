<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shoppinglist;
use App\Models\ShoppinglistItem;
use App\Http\Requests\ShoppingListItemRequest;
use App\Http\Requests\StoreShoppinglistItemRequest;

class ShoppingListItemController extends Controller
{
    public function store(StoreShoppinglistItemRequest $request, User $user, Shoppinglist $shoppinglist)
    {
        $shoppinglist->shoppinglistItems()->create($request->validated());

        return ['message' => 'the item has been added to the list'];
    }

    public function update(ShoppingListItemRequest $request, User $user, Shoppinglist $shoppinglist, ShoppinglistItem $item)
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
