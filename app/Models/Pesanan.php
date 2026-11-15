<?php

namespace App\Models;

use App\Enums\StatusPesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $fillable = [
        'kode_pesanan', 'kunci_idempoten', 'nama_pelanggan', 'kontak', 'catatan',
        'waktu_ambil_diminta', 'total_harga', 'status', 'alasan_penolakan',
    ];

    protected function casts(): array
    {
        return [
            'status' => StatusPesanan::class,
            'waktu_ambil_diminta' => 'datetime',
            'total_harga' => 'integer',
        ];
    }

    public function items(): HasMany
    {
        return $this->hasMany(ItemPesanan::class, 'pesanan_id');
    }

    public function riwayatStatus(): HasMany
    {
        return $this->hasMany(RiwayatStatus::class, 'pesanan_id');
    }

    public function bolehUbahStatus(StatusPesanan $baru): bool
    {
        return $this->status->bolehKe($baru);
    }
}
