<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function show(User $user): User
    {
        return $user;
    }

    public function update(UserUpdateRequest $request, User $user): array
    {
        $user->update($request->validated());

        return ['message' => 'user has been updated'];
    }

    public function destroy(User $user): array
    {
        $user->delete();

        return ['message' => 'user has been deleted'];
    }
}
