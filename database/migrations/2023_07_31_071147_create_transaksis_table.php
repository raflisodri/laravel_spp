<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->char('id_transaksi',11)->primary();
            $table->char('nis',8);
            $table->date('tanggal_bayar');
            $table->char('id_spp',11);
            $table->integer('jumlah_bayar');
            $table->text('keterangan');
            $table->char('id_petugas',11);
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
        Schema::dropIfExists('transaksis');
    }
}
