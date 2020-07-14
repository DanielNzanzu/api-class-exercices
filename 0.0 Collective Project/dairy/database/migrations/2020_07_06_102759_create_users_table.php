<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('userId');
            $table->integer('nationalId')->unique()->nullable();
            $table->integer('empId')->unique()->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->text('photo');
            $table->string('gender');
            $table->date('dob');
            $table->integer('nssf')->nullable();
            $table->integer('nhif')->nullable();
            $table->text('password')->nullable();
            $table->unsignedBigInteger('roleId');
            $table->foreign('roleId')->references('roleId')->on('roles');
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
        Schema::dropIfExists('users');
    }
}
