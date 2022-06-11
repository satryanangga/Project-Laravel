<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOrtusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ortu', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->char('nik', 16)->unique();
            $table->date('tgl_penerima_kia');
            $table->string('nama_ibu', 30);
            $table->date('tgl_lahir_ibu');
            $table->enum('agama_ibu', ['hindu', 'islam', 'protestan', 'katolik', 'budha', 'konghucu']);
            $table->enum('pendidikan_ibu', ['tidak_sekolah', 'sd', 'smp', 'smu', 'akademik', 'perguruan_tinggi']);
            $table->enum('golongan_darah_ibu', ['a', 'ab', 'b', 'o']);
            $table->string('pekerjaan_ibu', 20);
            $table->string('nama_ayah', 30);
            $table->date('tgl_lahir_ayah');
            $table->enum('agama_ayah', ['hindu', 'islam', 'protestan', 'katolik', 'budha', 'konghucu']);
            $table->enum('pendidikan_ayah', ['tidak_sekolah', 'sd', 'smp', 'smu', 'akademik', 'perguruan_tinggi']);
            $table->enum('golongan_darah_ayah', ['a', 'ab', 'b', 'o']);
            $table->string('pekerjaan_ayah', 20);
            $table->string('alamat', 50);
            $table->string('kecamatan', 15);
            $table->string('kabupaten', 15);
            $table->string('no_tlp', 50);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('data_ortus');
    }
}
