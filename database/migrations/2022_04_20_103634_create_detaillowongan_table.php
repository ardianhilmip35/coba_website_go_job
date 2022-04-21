<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetaillowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detaillowongan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lowongan', 50);
            $table->string('jenis_pekerjaan', 50);
            $table->string('kategori_jabatan', 50);
            $table->string('pengalaman', 50);
            $table->string('spesialis', 30);
            $table->string('alamat_kantor', 50);
            $table->string('tingkat_pendidikan', 30);
            $table->binary('logo_perusahaan');
            $table->binary('gedung_perusahaan');
            $table->string('gaji_lowongan', 15);
            $table->date('tanggal_uploud');
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
        Schema::dropIfExists('detaillowongan');
    }
}
