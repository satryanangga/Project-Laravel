<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_anak', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('anak_id');
            $table->date('tanggal_pemeriksaan');
            $table->float('berat_badan');
            $table->float('panjang_lahir');
            $table->float('suhu');
            $table->string('frekuensi_nadi');
            $table->string('frekuensi_detak_jantung');
            $table->string('keluhan_anak');
            $table->string('resep_obat');
            $table->string('pesan');

            $table->foreign('anak_id')->references('id')->on('data_anak');
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
        Schema::dropIfExists('pemeriksaan_anaks');
    }
}
