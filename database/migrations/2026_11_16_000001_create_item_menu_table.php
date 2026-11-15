<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item_menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 120);
            $table->string('jenis', 20)->index();
            $table->unsignedInteger('harga');
            $table->string('keterangan', 255)->nullable();
            $table->string('foto')->nullable();
            $table->json('label')->nullable();
            $table->boolean('aktif')->default(true);
            $table->boolean('tersedia')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('item_menu');
    }
};
