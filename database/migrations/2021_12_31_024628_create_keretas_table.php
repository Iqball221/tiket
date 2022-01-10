<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeretasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keretas', function (Blueprint $table) {
             $table->id();
            $table->bigInteger('id_penumpang')->unsigned();
            $table->string('nama_kereta');
            $table->string('jam_berangkat');
            $table->string('asal_berangkat');
            $table->string('tujuan_berangkat');
            //FK
            $table->foreign('id_penumpang')->references('id')
                  ->on('penumpangs')->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('keretas');
    }
}
