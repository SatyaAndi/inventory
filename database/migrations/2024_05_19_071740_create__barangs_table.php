<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('kode_barang');
        $table->string('nama_barang', 150);
        $table->enum('unit', ['Pcs', 'Buah', 'Lembar']);
        $table->string('ukuran', 150);
        $table->string('warna', 50);
        $table->string('jenis', 50);
        $table->integer('harga_satuan');
        $table->integer('stok');
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
        Schema::dropIfExists('barangs');
    }
};
