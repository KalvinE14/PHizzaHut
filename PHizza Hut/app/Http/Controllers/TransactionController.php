<?php

namespace App\Http\Controllers;

use App\TransactionDetail;
use App\TransactionHeader;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function viewAllTransactionByUserId($user_id){
        $transactions = TransactionHeader::where('user_id', $user_id);
        return view('transaction_history')->with('transactions', $transactions);
    }

}
