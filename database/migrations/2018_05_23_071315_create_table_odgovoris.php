<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOdgovoris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Odgovoris', function (Blueprint $table){
          $table->increments('id_odgovoras');
          $table->integer('pitanja_id')->unsigned();
          $table->foreign('pitanja_id')->references('id_pitanja')->on('pitanjas');
          $table->string('odgovor_a');
          $table->string('odgovor_b');
          $table->string('odgovor_c');
          $table->string('odgovor_d');
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
        Schema::dropIfExists('Odgovoris');
    }
}
