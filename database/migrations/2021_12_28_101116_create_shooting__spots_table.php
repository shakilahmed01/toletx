<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShootingSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shooting__spots', function (Blueprint $table) {
            $table->id();
            $table->string('shooting_name');
            $table->string('address');
            $table->string('floor_level');
            $table->string('floor_size');
            $table->string('road_width');
            $table->string('utilities')->nullable();
            $table->string('building_condition');
            $table->string('fire_safety')->nullable();
            $table->string('lift')->nullable();
            $table->string('parking')->nullable();
            $table->string('garden')->nullable();
            $table->string('cooking')->nullable();
            $table->string('sitting')->nullable();
            $table->string('wifi')->nullable();
            $table->string('vegetations')->nullable();
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
        Schema::dropIfExists('shooting__spots');
    }
}
