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
            $table->foreignId('pelamar_id')->unique();
            $table->string('universitas', 50)->nullable();
            $table->string('jurusan', 50)->nullable();
            $table->string('prodi', 50)->nullable();
            $table->string('lulus', 4)->nullable();
            $table->string('spesialis', 50)->nullable();
            $table->text('lokasi')->nullable();
            $table->string('gaji')->nullable();
            $table->timestamps();


            $table->foreign('pelamar_id')->references('id')->on('pelamar')->cascadeOnDelete()->cascadeOnUpdate();
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
