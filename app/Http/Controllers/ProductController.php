<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function create()
    {
        if (auth()->guest()) {
            abort(403);
        }

        if (auth()->user()->name !== 'Brian Frahm') {
            abort(403);
        }
        return view('products.create');
    }
}
