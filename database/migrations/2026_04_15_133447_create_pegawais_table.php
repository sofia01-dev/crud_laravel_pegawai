<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('jabatan');
            $table->integer('gaji');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}
