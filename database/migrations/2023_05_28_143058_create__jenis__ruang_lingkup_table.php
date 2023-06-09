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
        Schema::create('jenis__ruang_lingkup', function (Blueprint $table) {
            $table->id('id_Jenis_ruang_lingkup');
            $table->string('nama_jenis_ruang_lingkup');
            $table->string('deskripsi_jenis_ruang_lingkup');
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
        Schema::dropIfExists('_jenis__ruang_lingkup');
    }
};
