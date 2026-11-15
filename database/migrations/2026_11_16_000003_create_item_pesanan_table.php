<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item_pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->constrained('pesanan')->cascadeOnDelete();
            $table->foreignId('item_menu_id')->nullable()->constrained('item_menu')->nullOnDelete();
            $table->string('nama_snapshot', 120);
            $table->unsignedInteger('harga_snapshot');
            $table->unsignedSmallInteger('jumlah');
            $table->string('catatan', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('item_pesanan');
    }
};
