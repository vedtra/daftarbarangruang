<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrgDtl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_brg_dtl', function (Blueprint $table) {
            $table->string('id_bid');
            $table->string('id_brg_dtl');
            $table->string('id_brg_stok');
            $table->string('id_gol');
            $table->string('id_kel');
            $table->string('id_ssubkel');
            $table->string('id_subkel');
            $table->string('kondisi');
            $table->string('nm_ruang');
            $table->string('nup');

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
        Schema::dropIfExists('td_brg_dtl');
    }
}
