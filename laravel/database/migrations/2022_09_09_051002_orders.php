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
        Schema::create('orders', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('order_id');
            $table->bigInteger('customer_id')->unsigned();
            $table->date('order_date');
            $table->decimal('order_total',15,2);
            $table->date('order_date_delivery');
            $table->char('order_status',10);
            $table->timestamps();
            $table->foreign('customer_id')->references('customer_id')->on('customers')->onDelete("cascade");
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
