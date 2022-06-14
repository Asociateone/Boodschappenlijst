<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ShoppinglistItem;

class Product extends Model
{
    use HasFactory;

    public function shoppinglistItem(): HasMany
    {
        return $this->hasmany(ShoppinglistItem::class);
    }
}
