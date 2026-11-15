<?php

namespace App\Models;

use App\Enums\StatusPesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatStatus extends Model
{
    protected $table = 'riwayat_status';

    public $timestamps = false;

    protected $fillable = ['pesanan_id', 'status', 'waktu'];

    protected function casts(): array
    {
        return [
            'status' => StatusPesanan::class,
            'waktu' => 'datetime',
        ];
    }

    public function pesanan(): BelongsTo
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }
}
