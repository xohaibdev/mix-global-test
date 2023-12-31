<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCartItems()
    {
        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();
        return view('cart.cart-items', compact('cartItems'));
    }
}
