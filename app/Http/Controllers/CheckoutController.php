<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        $cart = Cart::bySession()->first();

        $checkout = $request->user()->checkout($cart->products->pluck('stripe_id')->toArray(), [
            'success_url' => route('orders.index'),
            'cancel_url' => route('cart.index'),
        ]);

        return view('checkout.index', [
            'checkout' => $checkout
        ]);
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cart = Cart::firstOrCreate([
            'user_id' => auth()->id(),
            'session_id' => session()->getId()
        ]);

        $cart->products()->syncWithoutDetaching($product);

        return back();
    }

    public function destroy(Product $product)
    {
        $cart = Cart::bySession()->first()->products()->detach($product);

        return back();
    }
}
