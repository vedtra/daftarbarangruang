<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbrMohonDtl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_dbr_mohon_dtl', function (Blueprint $table) {
            $table->integer('kode_barang')->unsigned();
            $table->integer('kode_dbr_mohon_dtl')->unsigned();
            $table->integer('id_kodefikasi');
            $table->string('nm_brg');
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
        Schema::dropIfExists('td_dbr_mohon_dtl');
    }
}
