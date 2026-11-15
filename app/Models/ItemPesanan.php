<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemPesanan extends Model
{
    protected $table = 'item_pesanan';

    protected $fillable = [
        'pesanan_id', 'item_menu_id', 'nama_snapshot', 'harga_snapshot', 'jumlah', 'catatan',
    ];

    protected function casts(): array
    {
        return [
            'harga_snapshot' => 'integer',
            'jumlah' => 'integer',
        ];
    }

    public function pesanan(): BelongsTo
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }

    public function itemMenu(): BelongsTo
    {
        return $this->belongsTo(ItemMenu::class, 'item_menu_id');
    }

    public function subtotal(): int
    {
        return $this->harga_snapshot * $this->jumlah;
    }
}
