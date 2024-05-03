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
        Schema::create('barang2', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('harga_barang');
            $table->string('jumlah_barang');
            $table->timestamps();
           
        });
    }

    /**php
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang2');

    }
};
