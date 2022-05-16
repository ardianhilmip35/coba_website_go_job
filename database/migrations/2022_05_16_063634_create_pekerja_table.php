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
            $table->string('pengalaman', 50);
            $table->string('posisi', 50);
            $table->string('perusahaan', 50);
            $table->string('lulus', 4);
            $table->string('spesialis', 50);
            $table->text('lokasi');
            $table->string('gaji');
            $table->timestamps();

            $table->foreign('pelamar_id')->references('id')->on('pelamar');
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
