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
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer("shipping");
            $table->string("apartment");
            $table->string("city");
            $table->string("country");
            $table->string("province");
            $table->string("postalcode");
            $table->integer("phone");
            $table->bigInteger("cardnumber");
            $table->string("namecard");
            $table->integer("expiredate");
            $table->integer("cvc");
            $table->integer("subtotal");
            $table->integer("taxes");
            $table->integer("totalamount");
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
};
