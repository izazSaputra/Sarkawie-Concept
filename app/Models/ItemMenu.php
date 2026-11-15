<?php

namespace App\Models;

use App\Enums\JenisItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ItemMenu extends Model
{
    protected $table = 'item_menu';

    protected $fillable = [
        'nama', 'jenis', 'harga', 'keterangan', 'foto', 'label', 'aktif', 'tersedia',
    ];

    protected function casts(): array
    {
        return [
            'jenis' => JenisItem::class,
            'harga' => 'integer',
            'label' => 'array',
            'aktif' => 'boolean',
            'tersedia' => 'boolean',
        ];
    }

    public function scopeDapatDipesan(Builder $query): Builder
    {
        return $query->where('aktif', true)->where('tersedia', true);
    }

    public function dapatDipesan(): bool
    {
        return $this->aktif && $this->tersedia;
    }
}
