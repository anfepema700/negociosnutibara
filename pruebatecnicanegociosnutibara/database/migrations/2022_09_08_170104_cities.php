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
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('city_id_id');
            $table->bigInteger('city_id')->unsigned();
            $table->char('city_name', 50 NOT NULL);
            $table->timestamps();
            $table->foreign('city_id')->references('city_id')->on('customers')->onDelete("cascade");
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
