<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbrHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tp_dbr_history', function (Blueprint $table) {
            $table->integer('id_dbr')->unsigned();
            $table->integer('id_dbr_history');
            $table->integer('kode_nip_dbr');
            $table->integer('nip_tgjwb');
            $table->integer('nup');
            $table->string('status');
            $table->date('tgl_akhir');
            $table->date('tgl_awal');
            $table->foreign('id_dbr')->references('id')->on('td_dbr')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tp_dbr_history');
    }
}
