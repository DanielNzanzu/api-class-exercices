<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('paymentId');
            $table->unsignedBigInteger('subscriptionId');
            $table->unsignedBigInteger('userId');
            $table->double('amount');
            $table->string('paymentMethod');
            $table->date('paidOn');
            $table->string('narrative');

            $table->foreign('subscriptionId')->references('subscriptionId')->on('subscriptions');
            $table->foreign('userId')->references('userId')->on('users');


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
        Schema::dropIfExists('payments');
    }
}
