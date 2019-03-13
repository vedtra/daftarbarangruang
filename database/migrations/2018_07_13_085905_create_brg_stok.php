<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrgStok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_brg_stok', function (Blueprint $table) {
            $table->integer('id_brg_stok');
            $table->integer('jumlah');
            $table->string('no_bast');
            $table->string('saldo');
            $table->integer('tahun');
            $table->date('tgl_bast');

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
        Schema::dropIfExists('td_brg_stok');
    }
}
