<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamarkerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamarkerja', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lowongan_id');
            $table->foreignId('pelamar_id');
            $table->text('deskripsi_lamaran');
            $table->string('portofolio_pelamar');
            $table->timestamps();

            $table->foreign('pelamar_id')->references('id')->on('pelamar')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('lowongan_id')->references('id')->on('lowongan')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lamarkerja');
    }
}
