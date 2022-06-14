<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(): Product
    {
        return Product::paginate(100);
    }
}
