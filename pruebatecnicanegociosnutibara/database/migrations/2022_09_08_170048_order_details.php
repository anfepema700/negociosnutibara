<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->nullable(false)->change();
            $table->bigInteger('product_id')->nullable(false)->change();
            $table->timestamps();
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete("cascade");
            $table->foreign('product_id')->references('product_id')->on('Products')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
