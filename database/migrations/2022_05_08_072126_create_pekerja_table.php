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
        Schema::create('tb_pekerja', function (Blueprint $table) {
            $table->string('id_pekerja', 5);
            $table->string('nama_pekerja', 50);
            $table->text('alamat_pekerja');
            $table->string('posisi_sebelumnya', 50);
            $table->string('riwayat_kerja', 50);
            $table->string('lokasi_kerja', 50);
            $table->string('spesialis', 50);
            $table->string('telp_pekerja', 13);
            $table->string('foto_pekerja');
            $table->string('ekspetasi_gaji', 50);
            $table->timestamps();

            //Primary Key
            $table->primary('id_pekerja');

            //relasi foreign key
            $table->string('id_pelamar', 5);
            $table->foreign('id_pelamar')->references('id_pelamar')->on('tb_users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pekerja');
    }
}
