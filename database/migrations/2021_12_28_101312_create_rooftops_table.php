<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRooftopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooftops', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('floor_area');
            $table->string('utilities')->nullable();
            $table->string('protection')->nullable();
            $table->string('lift')->nullable();
            $table->string('parking')->nullable();
            $table->string('interior_condition')->nullable();
            $table->string('shed')->nullable();
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
        Schema::dropIfExists('rooftops');
    }
}
