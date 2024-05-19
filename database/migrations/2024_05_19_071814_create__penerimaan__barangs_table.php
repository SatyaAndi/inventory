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
        Schema::create('penerimaan_barangs', function (Blueprint $table) {
            $table->id('id_penerimaan');
            $table->date('tgl_penyimpanan');
            $table->text('alamat');
           $table->unsignedBigInteger('kode_barang');
            $table->integer('kuantity');
            $table->foreign('kode_barang')->references('kode_barang')->on('barangs')->onDelete('cascade');
            $table->timestamps();

            //$table-> foreign('kode_barang')->references('kode_barang')->on('barangs');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerimaan_barangs');
    }
};
