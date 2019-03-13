<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_dbr', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_ruang_milik')->unsigned();
            $table->integer('jlh_brg');
            $table->integer('nip_dbr');
            $table->string('no_bast');
            $table->integer('id_status')->unsigned();
            $table->string('kode_status');
            $table->date('tgl_akhir');
            $table->date('tgl_awal');
            $table->date('tgl_bast');
            $table->foreign('kode_ruang_milik')->references('id_ruang')->on('tr_ruang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_status')->references('id')->on('tr_status')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('td_dbr');
    }
}
