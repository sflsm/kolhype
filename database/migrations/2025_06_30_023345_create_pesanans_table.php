<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('brand');
            $table->string('telepon');
            $table->string('produk');
            $table->string('link')->nullable();
            $table->string('paket');
            $table->timestamps();
        });
    }

    /**
     * Kembalikan migrasi (rollback).
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};