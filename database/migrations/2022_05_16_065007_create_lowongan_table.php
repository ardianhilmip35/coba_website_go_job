<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->unique();
            $table->string('nama_lowongan');
            $table->string('namalowongan', 50);
            $table->string('jenispekerjaan', 50);
            $table->enum('tingkatjabatan', ['CEO/Direktur/Manajer Senior', 'Asisten Manajer', 'Supervisor', 'Pegawai', 'Lulusan Baru/Pengalaman Kurang dari 1 tahun']);
            $table->string('gajipekerjaan', 50);
            $table->enum('spesialis', ['Arsitek', 'Biomedis', 'Bioteknologi', 'Staff Admin', 'Customer Service', 'Digital Marketing', 'E-commerce', 'Mobile Developer', 'Sistem Analis', 'Web Developer' ]);
            $table->enum('pengalaman', ['Tidak ada','1 Tahun', '2 Tahun', '3 Tahun', '4 Tahun', '5 Tahun', '6 Tahun', '7 Tahun', '8 Tahun', '9 Tahun', '10 Tahun']);
            $table->text('deskripsipekerjaan');
            $table->string('namastartup', 50);
            $table->text('deskripsistartup');
            $table->enum('pendidikan', ['SMA', 'DIPLOMA/SARJANA', 'PASCA SARJANA', 'DOKTOR']);
            $table->text('alamatstartup');
            $table->string('logo');
            $table->string('gedung');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongan');
    }
}
