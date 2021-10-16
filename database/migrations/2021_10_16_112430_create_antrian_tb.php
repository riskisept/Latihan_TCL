<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntrianTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrian_tb', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('regId')->unsigned();
            $table->integer('antrian');
            $table->timestamps();

            $table->foreign('regId')->references('id')->on('registrasi_tb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrian_tb');
    }
}
