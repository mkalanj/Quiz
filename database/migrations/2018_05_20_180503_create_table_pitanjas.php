<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePitanjas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Pitanjas', function (Blueprint $table){
          $table->increments('id_pitanja');
          $table->integer('kategorijas_id')->unsigned();
          $table->foreign('kategorijas_id')->references('id')->on('kategorijas');
          $table->string('Naziv_pit');
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
                Schema::dropIfExists('Pitanjas');

    }
}
