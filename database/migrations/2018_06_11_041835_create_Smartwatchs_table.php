<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmartwatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Smartwatchs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('model')->unique();
            $table->string('technology');
            $table->string('announced');
            $table->string('status');
            $table->string('dimensions');
            $table->string('weight');
            $table->string('sim');
            $table->string('type');
            $table->string('size');
            $table->string('resolution');
            $table->string('multitouch');
            $table->string('os');
            $table->string('chipset');
            $table->string('cpu');
            $table->string('gpu');
            $table->string('cardslot');
            $table->string('internal');
            $table->string('camera');

            $table->string('alerttypes');
            $table->string('loudspeaker');
            $table->string('jack');
            $table->string('wlan');
            $table->string('bluetooth');
            $table->string('gps');
            $table->string('nfc');
            $table->string('radio');
            $table->string('usb');
            $table->string('sensors');
            $table->string('messaging');
            $table->string('browser');
            $table->string('battery');
            $table->string('standby');
            $table->string('colors');
            $table->string('price');
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
        Schema::dropIfExists('Smartwatchs');
    }
}
