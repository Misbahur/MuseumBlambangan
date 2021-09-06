<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunjungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->id('pengunjung');
            $table->string('Nama_Pengunjung');
            $table->string('email')->unique();
            $table->integer('No_HP');
            $table->integer('NIK');
            $table->string('Alamat');
            $table->date('Berkunjung_Pada');
            $table->time('Pilih_Sesi_Kunjungan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengunjungs');
    }
}
