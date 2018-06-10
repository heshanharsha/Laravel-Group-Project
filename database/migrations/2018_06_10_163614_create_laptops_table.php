<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('model')->unique();
            $table->string('os');
            $table->string('processor');
            $table->string('graphics');
            $table->string('display');
            $table->string('memory');
            $table->string('harddrive');
            $table->string('opticaldrive');
            $table->string('battery');
            $table->string('color');
            $table->string('webcam');
            $table->string('audio');
            $table->string('pointingdevice');
            $table->string('weight');
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
        Schema::dropIfExists('laptops');
    }
}
