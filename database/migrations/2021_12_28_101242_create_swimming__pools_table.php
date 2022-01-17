<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwimmingPoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swimming__pools', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('type');
            $table->string('size');
            $table->string('wifi')->nullable();
            $table->string('laundry')->nullable();
            $table->string('change_room')->nullable();
            $table->string('toilet')->nullable();
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
        Schema::dropIfExists('swimming__pools');
    }
}
