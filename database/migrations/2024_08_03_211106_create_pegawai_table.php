<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id_pegawai'); // Primary key
            $table->string('nama_pegawai', 150);
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('jabatan', ['teknisi', 'admin', 'spv']);
            $table->enum('status', ['aktif', 'tidak_aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
