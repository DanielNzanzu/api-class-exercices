<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produce', function (Blueprint $table) {
            $table->bigIncrements('produceId');
            $table->date('dateRecorded');
            $table->unsignedBigInteger('intervalId');
            $table->unsignedBigInteger('userId');//recordedBy
            $table->unsignedBigInteger('animalId');
            $table->double('quantity');
            $table->char('scale',10); //litre,kilogram

            $table->foreign('intervalId')->references('intervalId')->on('intervals');
            $table->foreign('userId')->references('userId')->on('users');
            $table->foreign('animalId')->references('animalId')->on('animals');


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
        Schema::dropIfExists('produce');
    }
}
