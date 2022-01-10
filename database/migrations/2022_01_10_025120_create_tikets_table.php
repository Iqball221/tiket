<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
             $table->bigInteger('id_penumpang')->unsigned();
            $table->string('jenis_tiket');
            $table->string('no_duduk');
            $table->integer('stok');
            $table->string('total_terjual');
            $table->integer('sisa_tiket');
            
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
        Schema::dropIfExists('tikets');
    }
}


