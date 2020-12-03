<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    public function transactionDetail(){
        return $this->hasMany(TransactionDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    protected $table = 'transaction_headers';
}
