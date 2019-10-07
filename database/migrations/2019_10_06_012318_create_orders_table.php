<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('item');
            $table->integer('amount');
            $table->integer('emerald');
            $table->integer('turquoise');
            $table->integer('banquet');
            $table->integer('child');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('paypal')->nullable();
            $table->string('status')->default('awaiting payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
