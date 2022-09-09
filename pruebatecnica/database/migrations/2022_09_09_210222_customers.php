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
        Schema::create('customers', function (Blueprint $table) {
            $table->engine="InnoDB";
	    $table->bigIncrements('id');
            $table->char('customer_id_number',50);
            $table->char('customer_name',50);
            $table->date('customer_birth_date');
            $table->char('customer_address',100);
            $table->char('customer_phone',10);
            $table->bigInteger('city_id')->unsigned();            
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete("cascade");
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
