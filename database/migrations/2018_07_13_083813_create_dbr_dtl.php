<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbrDtl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_dbr_dtl', function (Blueprint $table) {
            $table->integer('kode_dbr')->unsigned();
            $table->integer('id_dbr_dtl');
            $table->string('kondisi_str');
            $table->integer('nup');
            $table->foreign('kode_dbr')->references('id')->on('td_dbr')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('td_dbr_dtl');
    }
}
