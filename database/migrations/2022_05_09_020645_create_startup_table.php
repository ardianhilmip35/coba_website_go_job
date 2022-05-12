<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_startup', function (Blueprint $table) {
            $table->string('id_startup', 5);
            $table->string('nama_admin', 50);
            $table->string('nama_startup', 50);
            $table->text('deskripsi_startup');
            $table->string('telp_startup', 13);
            $table->text('alamat_startup');
            $table->string('logo');
            $table->string('gedung');
            $table->string('website_startup',100);
            $table->string('email_startup', 50);
            $table->string('password_startup', 10);
            $table->timestamps();

            //Primary Key
            $table->primary('id_startup');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_startup');
    }
}
