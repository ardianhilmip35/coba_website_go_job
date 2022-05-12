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
        Schema::create('tb_mahsiswa', function (Blueprint $table) {
            $table->string('id_mhsiswa', 5);
            $table->string('nama_mhsiswa', 50);
            $table->string('jur_mhsiswa', 50);
            $table->string('prodi_mhsiswa', 50);
            $table->string('thn_lulus', 4);
            $table->string('spesialis', 50);
            $table->string('foto_mhsiswa');
            $table->text('alamat_mhsiswa');
            $table->string('telp_mhsiswa', 13);
            $table->string('ekspetasi_gaji', 50);
            $table->timestamps();

            //Primary Key
            $table->primary('id_mhsiswa');

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
        Schema::dropIfExists('tb_mahsiswa');
    }
}
