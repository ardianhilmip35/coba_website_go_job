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
        Schema::create('tb_lowongan', function (Blueprint $table) {
            $table->string('id_lowongan', 5);
            $table->string('id_startup', 5);
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

            //Primary Key
            $table->primary('id_lowongan');

            //Foreign Key
            $table->foreign('id_startup')->references('id_startup')->on('tb_startup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_lowongan');
    }
}
