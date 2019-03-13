<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuangMilik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_ruang_milik', function (Blueprint $table) {
            $table->integer('kode_ruang')->unsigned();
            $table->increments('id_ruang_milik');
            $table->integer('kd_unit');
            $table->integer('nip_rekam');
            $table->integer('nip_tgjwb');
            $table->integer('nip_update');
            $table->string('no_nd');
            $table->date('tgl_awal');
            $table->date('tgl_nd');
            $table->date('wk_rekam');
            $table->date('wk_update');
            $table->foreign('kode_ruang')->references('id_ruang')->on('tr_ruang')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('td_ruang_milik');
    }
}
