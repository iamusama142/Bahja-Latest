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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('area')->nullable();
            $table->string('block')->nullable();
            $table->string('address')->nullable();
            $table->string('address1')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('delivery_instruction')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
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
        Schema::dropIfExists('addresses');
    }
};
