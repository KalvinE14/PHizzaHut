<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Symfony\Component\Console\Input\Input;

class CartController extends Controller
{
    public function viewCartByUserId($user_id){
        $cart = Cart::join('pizzas', 'carts.pizza_id', '=', 'pizzas.pizza_id')->where('user_id', $user_id)->get();
        return view('cart')->with('cart', $cart);
    }

    public function deleteCart($cart_id, $user_id){
        $cart = Cart::where('cart_id', $cart_id)->delete();
        return redirect()->route('cart', $user_id);
    }

    public function updateQuantity($cart_id, $user_id, Request $request){
        $updatedQuantity = $request->input('quantity');
        $update = Cart::where('cart_id', $cart_id)->update(['quantity' => $updatedQuantity]);
        return redirect()->route('cart', $user_id);
    }
}
