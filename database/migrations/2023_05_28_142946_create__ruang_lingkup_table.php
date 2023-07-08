<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang_lingkup', function (Blueprint $table) {
            $table->id('id_Ruang_lingkup');
            $table->string('nama_ruang_lingkup');
            $table->string('file_ruang_lingkup');
            $table->foreignId('id_Periode_unit')->references('id_Periode_unit')->on('Periode_unit');
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
        Schema::dropIfExists('_ruang_lingkup');
    }
};
