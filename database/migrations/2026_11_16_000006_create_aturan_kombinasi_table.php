<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aturan_kombinasi', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_hasil', 30)->index();
            $table->json('pola_komponen');
            $table->boolean('dikonfirmasi_mitra')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aturan_kombinasi');
    }
};
