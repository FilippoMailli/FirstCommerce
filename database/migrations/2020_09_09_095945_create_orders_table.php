<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('cart_id')->constrained();
            $table->foreignId('user_id')->constrained()->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('address');
            $table->smallInteger('civic_number');
            $table->string('city');
            $table->string('country');
            $table->string('credit_card', 16);
            $table->smallInteger('cvc');
            $table->date('expires');
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
