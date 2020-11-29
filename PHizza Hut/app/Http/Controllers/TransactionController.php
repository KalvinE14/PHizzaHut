<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\TransactionDetail;
use App\TransactionHeader;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function viewAllTransactionByUserId($user_id){
        $transactions = TransactionHeader::where('user_id', $user_id)->get();
        return view('transaction_history')->with('transactions', $transactions);
    }

    public function viewAllDetailTransactionById($transaction_id){
        $detailTransactions = TransactionDetail::join('pizzas', 'pizzas.pizza_id', '=', 'transaction_details.pizza_id')->where('transaction_id', $transaction_id)->get();
        return view('transaction_detail')->with('detail', $detailTransactions);
    }

    public function viewAllTransaction(){
        $transactions = TransactionHeader::join('users', 'transaction_headers.user_id', '=', 'users.user_id')->get();
        return view('all_transaction')->with('transactions', $transactions);
    }

    public function getPizzaById($pizza_id){
        $pizza = Pizza::where('pizza_id', $pizza_id)->first();
        return $pizza;
    }
}
