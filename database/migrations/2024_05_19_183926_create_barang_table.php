<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('merek');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('satuan');
            // tambahkan kolom id_barang yang merupakan foreign key ke tabel supplier
            // $table->unsignedBigInteger('id_barang')->nullable();
            // $table->foreign('id_barang')->references('id')->on('supplier')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
}
