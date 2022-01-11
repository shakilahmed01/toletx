<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->id();
            $table->string('hostel_name');
            $table->string('address');
            $table->string('room_size');
            $table->string('room_type');
            $table->string('wifi')->nullable();
            $table->string('attached_toilet')->nullable();
            $table->string('utilities')->nullable();
            $table->string('lift')->nullable();
            $table->string('furnished')->nullable();
            $table->string('attached_varanda')->nullable();
            $table->string('hot_water')->nullable();
            $table->string('laundry')->nullable();
            $table->string('ac')->nullable();
            $table->string('cable_tv')->nullable();
            $table->string('parking')->nullable();
            $table->string('price');
            $table->string('photo');
            $table->SoftDeletes();
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
        Schema::dropIfExists('hostels');
    }
}
