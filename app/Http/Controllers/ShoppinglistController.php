<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShoppingListRequest;
use App\Models\Shoppinglist;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ShoppinglistController extends Controller
{
    public function index(): Collection
    {
        return Shoppinglist::all();
    }

    public function show(User $user, Shoppinglist $shoppinglist)
    {
        return $shoppinglist;
    }

    public function store(CreateShoppingListRequest $request, User $user): Shoppinglist
    {
        return $user->shoppinglists()->create($request->validated());
    }

    public function destroy(User $user, Shoppinglist $shoppinglist): array
    {
        $shoppinglist->delete();

        return ['message' => 'The shoppinglist was succesfully deleted'];
    }
}
