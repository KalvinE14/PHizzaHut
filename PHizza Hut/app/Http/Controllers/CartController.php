<?php

namespace App\Http\Controllers;

use App\Cart;
use App\TransactionDetail;
use App\TransactionHeader;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Type\Integer;
use Symfony\Component\Console\Input\Input;

class CartController extends Controller
{
    public function viewCartByUserId($user_id){
        if(!Session::get('username') || Session::get('role') == 'Admin'){
            return redirect()->route('home');
        }
        $allcart = Cart::join('pizzas', 'carts.pizza_id', '=', 'pizzas.pizza_id')->where('user_id', $user_id)->get();
        return view('cart')->with('allcart', $allcart)->with('user_id', $user_id);
    }

    public function deleteCart($cart_id, $user_id){
        $cart = Cart::where('cart_id', $cart_id)->delete();
        return redirect()->route('cart', $user_id);
    }

    public function updateQuantity($cart_id, $user_id, Request $request){
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|min:1'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

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

    public function addCart($pizza_id, Request $request){
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|min:1|numeric'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = User::where('username', Session::get('username'))->first();
        $user_id = $user->user_id;

        DB::table('carts')->insert([
            ['user_id' => $user_id, 'pizza_id' => $pizza_id, 'quantity' => $request->quantity]
        ]);

        return redirect()->back();
    }
}
