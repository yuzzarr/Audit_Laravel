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
        Schema::create('Periode_unit', function (Blueprint $table) {
            $table->id('id_Periode_unit');
            $table->date('tanggal_audit');
            $table->string('master_auditor');
            $table->foreignId('id_Unit')->references('id_Unit')->on('Unit');
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
        Schema::dropIfExists('_periode__unit');
    }
};
