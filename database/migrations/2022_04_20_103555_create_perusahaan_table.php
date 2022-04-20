<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_admin', 50);
            $table->string('nama_perusahaan', 50);
            $table->string('alamat_perusahaan', 50);
            $table->string('telp_perusahaan', 13);
            $table->string('website_perusahaan', 100);
            $table->binary('logo_perusahaan');
            $table->string('email_perusahaan', 30);
            $table->longText('deskripsi_perusahaan');
            $table->string('password', 10);
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
        Schema::dropIfExists('perusahaan');
    }
}
