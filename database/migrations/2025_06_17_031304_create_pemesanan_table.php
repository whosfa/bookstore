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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained()->OnDelete('cascade');
            $table->foreignId('id_keranjang')->constrained()->OnDelete('cascade');
            $table->integer('total_harga');
            $table->string('kuantitas');
            $table->date('tanggal');
            $table->enum('status', ['Belum Bayar', 'Sudah Bayar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
