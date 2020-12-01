<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\TransactionDetail;
use App\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function viewAllTransactionByUserId($user_id){
        if(!Session::get('username') || Session::get('role') == 'Admin' ){
            return redirect()->route('home');
        }
        $transactions = TransactionHeader::where('user_id', $user_id)->get();
        return view('transaction_history')->with('transactions', $transactions);
    }

    public function viewAllDetailTransactionById($transaction_id){
        if(!Session::get('username')){
            return redirect()->route('home');
        }
        $detailTransactions = TransactionDetail::join('pizzas', 'pizzas.pizza_id', '=', 'transaction_details.pizza_id')->where('transaction_id', $transaction_id)->get();
        return view('transaction_detail')->with('detail', $detailTransactions);
    }

    public function viewAllTransaction(){
        if(!Session::get('username')){
            return redirect()->route('home');
        }
        $transactions = TransactionHeader::join('users', 'transaction_headers.user_id', '=', 'users.user_id')->get();
        return view('all_transaction')->with('transactions', $transactions);
    }

    public function getPizzaById($pizza_id){
        $pizza = Pizza::where('pizza_id', $pizza_id)->first();
        return $pizza;
    }
}
