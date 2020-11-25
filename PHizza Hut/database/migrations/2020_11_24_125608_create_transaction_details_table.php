<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->foreign('transaction_id')->references('transaction_id')->on('transaction_headers')->onDelete('cascade');
            $table->foreignId('transaction_id');
            $table->foreign('pizza_id')->references('pizza_id')->on('pizzas')->onDelete('cascade');
            $table->foreignId('pizza_id');
            $table->integer('quantity');
            $table->integer('total_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
