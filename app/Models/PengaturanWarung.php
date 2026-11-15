<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengaturanWarung extends Model
{
    protected $table = 'pengaturan_warung';

    protected $fillable = [
        'nama_resmi', 'alamat', 'kontak', 'jam_buka', 'info_pengambilan', 'pemesanan_dibuka',
    ];

    protected function casts(): array
    {
        return ['pemesanan_dibuka' => 'boolean'];
    }

    public static function ambil(): self
    {
        return static::query()->firstOrFail();
    }
}
