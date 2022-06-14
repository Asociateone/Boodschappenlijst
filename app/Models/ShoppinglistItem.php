<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShoppinglistItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount'
    ];

    public function shoppinglists(): BelongsTo
    {
        return $this->belongsTo(Shoppinglist::class);
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
