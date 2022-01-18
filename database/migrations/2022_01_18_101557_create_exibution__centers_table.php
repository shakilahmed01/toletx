<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExibutionCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exibution__centers', function (Blueprint $table) {
            $table->id();
            $table->string('exibution_center_name');
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
            $table->string('dining')->nullable();
            $table->string('spa')->nullable();
            $table->string('gym')->nullable();
            $table->string('sports')->nullable();
            $table->string('swimmingpool')->nullable();
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
        Schema::dropIfExists('exibution__centers');
    }
}
