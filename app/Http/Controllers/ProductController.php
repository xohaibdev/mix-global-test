<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('products.index', compact('products'));

    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->route('products')->with('error', 'Product not found!');
        }

        $user = \Auth::user();
        $existingCartItem = Cart::where(['user_id' => $user->id, 'product_id' => $product->id])->first();

        if ($existingCartItem) {

            $existingCartItem->update([
                'quantity' => $existingCartItem->quantity + 1,
                'total_price' => $existingCartItem->total_price + $product->price,
            ]);

        } else {

            Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => 1,
                'total_price' => $product->price,
            ]);

        }

        return redirect()->route('products')->with('success', 'Product added to the cart successfully!');
    }

    public function removeFromCart($productId)
    {
        $user = auth()->user();
        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->route('getCartItems')->with('success', 'Product removed from the cart successfully!');
        }
        return redirect()->route('getCartItems')->with('error', 'Product not found in the cart!');
    }
}
