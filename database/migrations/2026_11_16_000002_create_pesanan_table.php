<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan', 20)->unique(); 
            $table->string('kunci_idempoten', 64)->unique(); 
            $table->string('nama_pelanggan', 100);
            $table->string('kontak', 30)->index();
            $table->text('catatan')->nullable();
            $table->dateTime('waktu_ambil_diminta');
            $table->unsignedInteger('total_harga');
            $table->string('status', 30)->default('menunggu_konfirmasi')->index();
            $table->text('alasan_penolakan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
