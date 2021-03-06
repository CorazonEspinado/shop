<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->float('balance',10,4)->default(0);
            $table->float('total_credit',10,4)->default(0);
            $table->float('total_debit',10,4)->default(0);
            $table->string('withdraw_method')->default('bank');
            $table->string('payment_email')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('swift')->nullable();
            $table->string('bank_account')->nullable();
            $table->integer('country_code')->nullable();
            $table->longText('payment_details')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
