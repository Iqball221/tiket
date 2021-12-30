<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenumpangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jk');
            $table->integer('no_hp');
            $table->string('jenis_tiket');
            $table->string('asal');
            $table->string('tujuan');
            $table->date('tgl_berangkat');
            $table->integer('jumlah');
             $table->string('total');

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
        Schema::dropIfExists('penumpangs');
    }
}
