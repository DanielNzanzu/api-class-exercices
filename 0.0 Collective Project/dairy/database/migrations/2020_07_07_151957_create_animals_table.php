<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('animalId');
            $table->string('name');
            $table->unsignedBigInteger('vitalId');
            $table->unsignedBigInteger('breedId');
            $table->date('dob');
            $table->string('gender');
            $table->unsignedBigInteger('parentId');

            $table->foreign('vitalId')->references('vitalId')->on('vitals');
            $table->foreign('breedId')->references('breedId')->on('breeds');

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
        Schema::dropIfExists('animals');
    }
}
