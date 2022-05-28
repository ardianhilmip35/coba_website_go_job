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
            $table->foreignId('pelamar_id')->unique();
            $table->string('pengalaman', 50)->nullable();
            $table->string('posisi', 50)->nullable();
            $table->string('perusahaan', 50)->nullable();
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
        Schema::dropIfExists('pekerja');
    }
}
