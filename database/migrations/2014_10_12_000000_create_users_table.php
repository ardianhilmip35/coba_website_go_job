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
<<<<<<< HEAD
            $table->id();
            $table->string('nama_admin', 50);
            $table->string('nama_perusahaan', 50);
            $table->string('deskripsi_perusahaan', 50)->nullable();
            $table->string('telp_perusahaan', 15);
            $table->text('alamat_perusahaan');
            $table->string('logo')->nullable();
            $table->string('gedung')->nullable();
            $table->text('website_perusahaan')->nullable();
            $table->string('email', 100)->unique();
=======
            $table->Increments('id_admin');
            $table->string('nama_admin', 50);
            $table->string('nama_perusahaan', 50);
            $table->text('deskripsi_perusahaan')->nullable();
            $table->string('telp_perusahaan', 13);
            $table->text('alamat_perusahaan');
            $table->string('logo')->nullable();;
            $table->string('gedung')->nullable();;
            $table->string('website_perusahaan',100)->nullable();;
            $table->string('email')->unique();
>>>>>>> 1c6faca1f051d35f6e6abf0b86ab3c754b905121
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
