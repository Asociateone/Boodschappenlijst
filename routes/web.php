<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppinglistController;
use App\Http\Controllers\ShoppingListItemController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [ProductController::class, 'index'])->name('products');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::apiResource('user', UserController::class)->middleware(['auth:api', 'userBelongsToPage'])->names('user')->except(['index', 'create']);

Route::prefix('user/{user}')->middleware(['auth:api', 'userBelongsToPage'])->group(function () {
    Route::apiResource('shoppinglist', ShoppinglistController::class)->names('shoppinglist')->except(['update']);

    Route::apiResource('shoppinglist/{shoppinglist}/items', ShoppinglistItemController::class);
});
