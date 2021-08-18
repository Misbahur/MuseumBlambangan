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
            $table->id('transaksi');
            $table->unsignedBigInteger('pengunjung_id');
            $table->unsignedBigInteger('sesi_id');
            $table->unsignedBigInteger('Kategori_id');
            $table->date('tanggal_transaksi');
            $table->date('tanggal_kunjungan');
            $table->string('dokumen',100);
            
            
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
