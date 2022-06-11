<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKondisiLahirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_lahir', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('catatan_persalinan_id');
            $table->string('name');
            
            $table->foreign('catatan_persalinan_id')->references('id')->on('catatan_persalinan')->onDelete('cascade');
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
        Schema::dropIfExists('kondisi_lahirs');
    }
}
