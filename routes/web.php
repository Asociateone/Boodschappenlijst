<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppinglistController;
use App\Http\Controllers\ShoppingListItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [ProductController::class, 'index'])->name('products');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::apiResource('user', UserController::class)->middleware(['auth:api', 'userBelongsToPage'])->names('user')->except(['index', 'create']);

Route::prefix('user/{user}')->middleware(['auth:api', 'userBelongsToPage'])->group(function () {
    Route::apiResource('shoppinglist', ShoppinglistController::class)->names('shoppinglist')->except(['update']);

    Route::apiResource('shoppinglist/{shoppinglist}/items', ShoppinglistItemController::class);
});
