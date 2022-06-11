<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanPersalinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_persalinan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ortu_id');
            $table->dateTime('tanggal_persalinan');
            $table->enum('penolong_persalinan', ['Bidan', 'Dokter', 'Lainnya']);
            $table->enum('cara_persalinan', ['normal', 'tindakan']);
            $table->enum('keadaan_ibu', ['sehat', 'sakit', 'lainnya']);
            // $table->unsignedInteger('kondisi_lahir_id');
            // $table->unsignedInteger('asupan_lahir_id');
            // $table->set('kondisi_lahir', ['Segera menangis', 'Menangis beberapa saat', 'Seluruh tubuh kemerahan', 'Tidak Menangis', 'Anggota kebiruan', 'Seluruh tubuh biru', 'Kelainan bawaan', 'Meninggal']);
            // $table->set('asupan_lahir', ['IMD dalam 1 jam', 'Suntikan Vitamin K1', 'Salep mata antibiotika profilaksis', 'Imunisasi Hb0']);

            $table->foreign('ortu_id')->references('id')->on('data_ortu')->onDelete('cascade');
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
        Schema::dropIfExists('catatan_persalinans');
    }
}
