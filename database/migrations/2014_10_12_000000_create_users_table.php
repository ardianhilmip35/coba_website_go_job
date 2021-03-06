<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_admin', 50);
            $table->string('nama_perusahaan', 50);
            $table->text('deskripsi_perusahaan')->nullable();
            $table->string('telp_perusahaan', 15);
            $table->text('alamat_perusahaan');
            $table->string('logo')->nullable();
            $table->string('gedung')->nullable();
            $table->text('website_perusahaan')->nullable();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
