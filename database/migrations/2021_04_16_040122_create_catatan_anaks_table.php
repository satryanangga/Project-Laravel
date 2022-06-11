<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_anak', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('anak_id');
            $table->date('tgl_pemeriksaan');
            $table->float('berat_badan');
            $table->float('panjang_badan');
            $table->float('indeks_massa_tubuh');

            $table->foreign('anak_id')->references('id')->on('data_anak')->onDelete('cascade');
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
        Schema::dropIfExists('catatan_anaks');
    }
}
