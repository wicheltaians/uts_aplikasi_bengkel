<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhanTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('keluhan', function (Blueprint $table) {
            $table->id('id_keluhan');
            $table->text('nama_keluhan');
            $table->integer('ongkos');
            $table->string('no_pol', 10);
            $table->foreignId('customer_id')->constrained('customers', 'id_customer')->onDelete('cascade');
            $table->foreignId('id_pegawai')->constrained('pegawai', 'id_pegawai')->onDelete('cascade');
            $table->timestamps();

            $table->foreign('no_pol')->references('no_pol')->on('kendaraan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('keluhan');
    }
}
