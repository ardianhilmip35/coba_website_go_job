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
            $table->foreignId('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('namalowongan', 50)->nullable();
            $table->enum('jenispekerjaan', ['Penuh', 'Paruh Waktu', 'Kontrak', 'Magang'])->nullable();
            $table->enum('tingkatjabatan', ['CEO/Direktur/Manajer Senior', 'Asisten Manajer', 'Supervisor', 'Pegawai', 'Lulusan Baru/Pengalaman Kurang dari 1 tahun'])->nullable();
            $table->string('gajipekerjaan', 50);
            $table->enum('spesialis', ['Arsitek', 'Biomedis', 'Bioteknologi', 'Staff Admin', 'Customer Service', 'Digital Marketing', 'E-commerce', 'Mobile Developer', 'Sistem Analis', 'Web Developer' ])->nullable();
            $table->enum('pengalaman', ['Tidak ada','1 Tahun', '2 Tahun', '3 Tahun', '4 Tahun', '5 Tahun', '6 Tahun', '7 Tahun', '8 Tahun', '9 Tahun', '10 Tahun'])->nullable();
            $table->text('deskripsipekerjaan')->nullable();
            $table->string('namaperusahaan', 50)->nullable();
            $table->text('deskripsiperusahaan')->nullable();
            $table->enum('pendidikan', ['SMA', 'DIPLOMA/SARJANA', 'PASCA SARJANA', 'DOKTOR'])->nullable();
            $table->text('alamatperusahaan')->nullable();
            $table->string('logo')->nullable();
            $table->string('gedung')->nullable();
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
        Schema::dropIfExists('lowongan');
    }
}
