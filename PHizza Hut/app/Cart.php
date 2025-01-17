<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $table = 'carts';
    public $timestamps = false;
}
