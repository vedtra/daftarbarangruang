<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAsalTujuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('td_dbr_mohon', function($table) {
        $table->integer('ruang_asal');
        $table->integer('ruang_tujuan');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('td_dbr_mohon', function($table) {
        $table->integer('ruang_asal');
        $table->integer('ruang_tujuan');
    });
    }
}
