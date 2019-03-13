<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdDbrMohon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_dbr_mohon', function (Blueprint $table) {
            $table->integer('id_dbr_mohon');
            $table->string('jenis_mohon');
            $table->integer('nip_mohon');
            $table->string('no_mohon');
            $table->integer('id_status')->unsigned();
            $table->string('kode_status_mohon');
            $table->date('tgl_mohon');
        
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
        Schema::dropIfExists('td_dbr_mohon');
    }
}
