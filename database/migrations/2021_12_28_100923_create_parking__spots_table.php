<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking__spots', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('price');
            $table->string('floor_level');
            $table->string('floor_height');
            $table->string('description');
            $table->string('vehicle_type');
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
        Schema::dropIfExists('parking__spots');
    }
}
