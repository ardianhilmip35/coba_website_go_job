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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->string('id_pelamar', 5);
            $table->string('nama_pelamar', 50);
            $table->string('email_pelamar', 50);
            $table->string('no_hp', 13);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->text('alamat_pelamar');
            $table->string('cv_pelamar');
            $table->string('password', 10);
            $table->rememberToken();
            $table->timestamps();

            //Primary Key
            $table->primary('id_pelamar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_users');
    }
}
