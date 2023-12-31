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
        Schema::create('file_setup', function (Blueprint $table) {
            $table->id('id_File_setup');
            $table->string('file_audit');
            $table->string('file_kta');
            $table->string('file_feedback');
            $table->string('status');
            $table->foreignId('id_Auditee')->references('id_Auditee')->on('auditee')->onDelete('cascade');
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
        Schema::dropIfExists('_file_setup');
    }
};
