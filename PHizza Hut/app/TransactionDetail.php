<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    public function transactionHeaders(){
        return $this->belongsTo(TransactionHeader::class);
    }

    protected $table = 'transaction_details';
}
