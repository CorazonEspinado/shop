<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');//User making transaction
            $table->integer('qrcode_id');
            $table->string('payment_method')->nullable();
            $table->integer('qrcode_owner_id')->nullable();
            $table->string('message')->default('initiated');
            $table->float('amount', 10, 4);
            $table->string('status');//initiated, payment failed,completed and successull
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
