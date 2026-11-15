<?php

namespace App\Models;

use App\Enums\JenisHasil;
use Illuminate\Database\Eloquent\Model;

class AturanKombinasi extends Model
{
    protected $table = 'aturan_kombinasi';

    protected $fillable = ['jenis_hasil', 'pola_komponen', 'dikonfirmasi_mitra'];

    protected function casts(): array
    {
        return [
            'jenis_hasil' => JenisHasil::class,
            'pola_komponen' => 'array',
            'dikonfirmasi_mitra' => 'boolean',
        ];
    }
}
