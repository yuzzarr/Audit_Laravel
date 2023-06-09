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
        Schema::table('ruang_lingkup', function (Blueprint $table) {            
            $table->foreignId('id_Jenis_ruang_lingkup')->references('id_Jenis_ruang_lingkup')->on('Jenis__ruang_lingkup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
