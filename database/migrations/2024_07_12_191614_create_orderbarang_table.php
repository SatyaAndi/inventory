<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orderbarang', function (Blueprint $table) {
            $table->string('no_po')->primary();
            $table->date('tanggal');
            $table->string('kode_supplier');
            $table->integer('PPN');

            $table->foreign('kode_supplier')->references('kode_supplier')->on('supplier')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderbarang');
    }
};
