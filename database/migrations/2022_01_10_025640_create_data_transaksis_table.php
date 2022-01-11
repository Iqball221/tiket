<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jk');
            $table->integer('no_hp');
            $table->bigInteger('id_kereta')->unsigned();
            $table->bigInteger('id_tiket')->unsigned();
            $table->string('jam_berangkat');
            $table->string('asal');
            $table->string('tujuan');
            $table->string('no_duduk');
            $table->integer('jumlah');
        
            
                  $table->foreign('id_kereta')->references('id')
                  ->on('keretas')->onUpdate('cascade')
                  ->onDelete('cascade');
                  $table->foreign('id_tiket')->references('id')
                  ->on('tikets')->onUpdate('cascade')
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
        Schema::dropIfExists('data_transaksis');
    }
}
