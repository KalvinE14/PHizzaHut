<?php

namespace App\Http\Controllers;

use App\Cart;
use App\TransactionDetail;
use App\TransactionHeader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;
use Symfony\Component\Console\Input\Input;

class CartController extends Controller
{
    public function viewCartByUserId($user_id){
        $allcart = Cart::join('pizzas', 'carts.pizza_id', '=', 'pizzas.pizza_id')->where('user_id', $user_id)->get();
        return view('cart')->with('allcart', $allcart)->with('user_id', $user_id);
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

    public function checkout($user_id){
        $cart = Cart::join('pizzas', 'carts.pizza_id', '=', 'pizzas.pizza_id')->where('user_id', $user_id)->get();
        TransactionHeader::insert([
            ['user_id' => $user_id, 'created_at' => Carbon::now()]
        ]);

        $latestTransaction = TransactionHeader::latest()->first(); 

        foreach($cart as $c){
            $total_price = $c->quantity * $c->price;
            TransactionDetail::insert([
                ['transaction_id' => $latestTransaction->transaction_id, 'pizza_id' => $c->pizza_id, 'quantity' => $c->quantity, 'total_price' => $total_price]
            ]);
            $deletedCart = Cart::where('cart_id', $c->cart_id)->delete();
        }

        return redirect()->route('cart', $user_id);
    }
}
