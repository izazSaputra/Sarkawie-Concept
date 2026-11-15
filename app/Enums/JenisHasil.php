<?php

namespace App\Enums;

enum JenisHasil: string
{
    case MakananLengkap = 'makanan_lengkap';
    case LaukSaja = 'lauk_saja';
    case TermasukMinuman = 'termasuk_minuman';

    public function label(): string
    {
        return match ($this) {
            self::MakananLengkap => 'Makanan lengkap',
            self::LaukSaja => 'Lauk saja',
            self::TermasukMinuman => 'Termasuk minuman',
        };
    }
}
