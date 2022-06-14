<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function index()
    {
        return Product::paginate(100);
    }
}
