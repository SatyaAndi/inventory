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
        Schema::create('pengeluaran_barangs', function (Blueprint $table) {
            $table->id('id_pengeluaran');
            $table->date('tgl_keluar');
            $table->string('tujuan', 150);
            $table->integer('kuantity');
            $table->unsignedBigInteger('kode_barang');
            $table->foreign('kode_barang')->references('kode_barang')->on('barangs')->onDelete('cascade');
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
        Schema::dropIfExists('pengeluaran_barangs');
    }
};
