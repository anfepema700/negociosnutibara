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
            $table->char('customer_id_number', 50 NOT NULL);
            $table->char('customer_name', 50 NOT NULL);
            $table->date('customer_birth_date', NOT NULL);
            $table->char('customer_address', 100 NOT NULL);
            $table->char('customer_address', 10 NOT NULL);
            $table->char('customer_address', 100 NOT NULL);
            $table->integer('city_id', NOT NULL)
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
        //
    }
};
