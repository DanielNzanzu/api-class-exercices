<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('subscriptionId');
            $table->date('start');
            $table->date('end');
            $table->double('price');
            $table->double('quantity');
            $table->unsignedBigInteger('userId');
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('terminationId')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
