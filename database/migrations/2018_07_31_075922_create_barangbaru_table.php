<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangbaruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_mohon_baru', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_brg');
            $table->string('jenis_mohon');
            $table->integer('jumlah');
            $table->string('kode_status_mohon');
            $table->integer('ruang_tujuan');
            $table->string('keperluan');            
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
        Schema::dropIfExists('td_mohon_baru');
    }
}
