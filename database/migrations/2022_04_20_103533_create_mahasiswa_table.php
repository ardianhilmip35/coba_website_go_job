<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('universitas', 50);
            $table->string('jurusan', 30);
            $table->string('program_studi', 30);
            $table->date('tahun_lulus');
            $table->string('spesialis', 30);
            $table->string('alamat_domisili', 50);
            $table->string('lokasi_kerja', 50);
            $table->string('ekspektasi_gaji', 15);
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
        Schema::dropIfExists('mahasiswa');
    }
}
