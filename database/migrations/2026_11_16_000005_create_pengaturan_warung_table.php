<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengaturan_warung', function (Blueprint $table) {
            $table->id();
            $table->string('nama_resmi', 120);
            $table->string('alamat', 255)->nullable();
            $table->string('kontak', 40)->nullable();
            $table->string('jam_buka', 60)->nullable();
            $table->text('info_pengambilan')->nullable();
            $table->boolean('pemesanan_dibuka')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengaturan_warung');
    }
};
