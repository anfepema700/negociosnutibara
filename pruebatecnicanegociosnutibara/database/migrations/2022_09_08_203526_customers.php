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
        Schema::create('customers', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('customer_id');
            $table->char('customer_id_number',50)->nullable(false);
            $table->char('customer_name',50)->nullable(false);
            $table->date('customer_birth_date')->nullable(false);
            $table->char('customer_address',100)->nullable(false);
            $table->char('customer_phone',10)->nullable(false);
            $table->bigInteger('city_id')->unsigned();            
            $table->timestamps();
            $table->foreign('city_id')->references('city_id_id')->on('cities')->onDelete("cascade");
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
