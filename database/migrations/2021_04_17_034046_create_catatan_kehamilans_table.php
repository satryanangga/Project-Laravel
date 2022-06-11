<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanKehamilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_kehamilan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ortu_id');
            $table->char('hamil_ke', 4);
            $table->date('hpht');
            $table->date('htp');
            $table->text('riwayat_penyakit');
            $table->text('riwayat_alergi');

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
        Schema::dropIfExists('catatan_kehamilans');
    }
}
