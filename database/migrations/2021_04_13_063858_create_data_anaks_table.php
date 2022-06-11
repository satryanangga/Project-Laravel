<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anak', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ortu_id');
            $table->string('nama');
            $table->enum('jk', ['laki-laki', 'perempuan']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->float('berat_lahir');
            $table->float('panjang_lahir');
            $table->float('lingkar_kepala');

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
        Schema::dropIfExists('data_anaks');
    }
}
