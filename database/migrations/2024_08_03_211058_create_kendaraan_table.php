<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id(); // Tambahkan kolom 'id' sebagai primary key otomatis
            $table->string('no_pol', 10)->unique(); // Set 'no_pol' sebagai kolom unik
            $table->string('no_mesin', 15);
            $table->enum('merek', ['Honda', 'Yamaha', 'Suzuki', 'Kawasaki', 'Lain']);
            $table->enum('warna', ['Putih', 'Hitam', 'Hijau', 'Biru', 'Merah', 'Lain']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan');
    }
}
