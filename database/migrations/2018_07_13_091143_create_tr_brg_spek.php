<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrBrgSpek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_brg_spek', function (Blueprint $table) {
            $table->integer('kode_barang')->unsigned();
            $table->integer('id_brg_spek');
            $table->string('keterangan');
            $table->string('merk');
            $table->string('spek_lain');
            $table->string('type');
            $table->foreign('kode_barang')->references('id')->on('tr_brg')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tr_brg_spek');
    }
}
