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
            $table->bigInteger('id_penumpang')->unsigned();
            $table->bigInteger('id_transaksi')->unsigned();
            $table->bigInteger('id_kereta')->unsigned();
            $table->bigInteger('id_tiket')->unsigned();
            $table->string('asal');
            $table->string('tujuan');
            $table->string('asal_berangkat');
            $table->string('tujuan_berangkat');
            $table->integer('jumlah');
            $table->integer('total');

            
            $table->foreign('id_penumpang')->references('id')
                  ->on('penumpangs')->onUpdate('cascade')
                  ->onDelete('cascade');
                  $table->foreign('id_transaksi')->references('id')
                  ->on('transaksis')->onUpdate('cascade')
                  ->onDelete('cascade');
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
