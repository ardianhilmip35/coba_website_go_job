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
        Schema::create('tb_lamarkerja', function (Blueprint $table) {
            $table->string('id_lamarkerja', 5);
            $table->string('id_lowongan', 5)->unique();
            $table->string('id_pelamar', 5);
            $table->text('deskripsi_lamaran');
            $table->string('portofolio_pelamar');
            $table->timestamps();

            //Primary Key
            $table->primary('id_lamarkerja');

            //Foreign Key
            $table->foreign('id_pelamar')->references('id_pelamar')->on('tb_users');
            $table->foreign('id_lowongan')->references('id_lowongan')->on('tb_lowongan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_lamarkerja');
    }
}
