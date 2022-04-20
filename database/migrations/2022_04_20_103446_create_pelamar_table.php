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
            $table->string('nama_pelamar', 50);
            $table->string('email_pelamar', 50);
            $table->string('no_hp', 13);
            $table->string('password', 10);
            $table->date('tanggal_lahir');
            $table->string('jns_kelamin', 15);
            $table->string('alamat_pelamar', 50);
            $table->binary('cv_pelamar');
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
        Schema::dropIfExists('pelamar');
    }
}
