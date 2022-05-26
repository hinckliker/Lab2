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
        Schema::create('addres', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('customer_id');
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('name');
            $table->string('town');
            $table->string('street');
            $table->integer('house');
            $table->integer('floor');
            $table->integer('password');
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
        Schema::dropIfExists('addres');
    }
};
