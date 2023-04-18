<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cartItems = session()->get('cartItems',[]);

        if (isset($cartItems[$id])) {
            $cartItems[$id]['quantity']++;
        }else {
            $cartItems[$id] = [
                'id'=>$id,
                'image_path' => $product->image_path,
                'name' => $product->name,
                'details' => $product->details,
                'price' => $product->price,
                'brand' => $product->brand,
                'quantity' => 1,
            ];
        }

        session()->put('cartItems',$cartItems);

        return redirect()->back()->with('success', 'Product added to cart !!!');
    }

    public function deleteFromCart($id)
    {
        $cartItems = session()->get('cartItems',[]);

        if (isset($cartItems[$id])) {
            unset($cartItems[$id]);
            session()->put('cartItems',$cartItems);

            return redirect()->back()->with('success', 'Product deleted successfully !!!');
        }
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cartItems = session()->get('cartItems');
            $cartItems[$request->id]["quantity"] = $request->quantity;
            session()->put('cartItems', $cartItems);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }
}
