<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerja', function (Blueprint $table) {
            $table->id();
            $table->string('riwayat_kerja', 50);
            $table->string('posisi_sebelumnya', 50);
            $table->date('tahun_kerja');
            $table->string('spesialis', 30);
            $table->string('alamat_domisili', 50);
            $table->string('lokasi_kerja', 50);
            $table->string('ekspektasi_kerja', 15);
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
        Schema::dropIfExists('pekerja');
    }
}
