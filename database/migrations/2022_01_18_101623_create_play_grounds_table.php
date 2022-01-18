<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('play_grounds', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('type');
            $table->string('wifi')->nullable();
            $table->string('attached_toilet')->nullable();
            $table->string('utilities')->nullable();
            $table->string('lift')->nullable();
            $table->string('furnished')->nullable();
            $table->string('laundry')->nullable();
            $table->string('change_room')->nullable();
            $table->string('ac')->nullable();
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
        Schema::dropIfExists('play_grounds');
    }
}
