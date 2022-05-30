<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id')->unique()->nullable();
            $table->string('nama_pelamar', 50);
            $table->string('telp_pelamar', 15)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki - Laki', 'Perempuan'])->nullable();
            $table->enum('agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'])->nullable();
            $table->string('foto')->nullable();
            $table->text('alamat_pelamar')->nullable();
            $table->string('cv_pelamar')->nullable();
            $table->string('universitas', 50)->nullable();
            $table->string('jurusan', 50)->nullable();
            $table->string('prodi', 50)->nullable();
            $table->string('pengalaman', 50)->nullable();
            $table->string('posisi', 50)->nullable();
            $table->string('perusahaan', 50)->nullable();
            $table->string('tahun', 4)->nullable();
            $table->string('spesialis', 50)->nullable();
            $table->text('lokasi')->nullable();
            $table->string('gaji')->nullable();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('level')->cascadeOnDelete()->cascadeOnUpdate();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamar');
    }
}
