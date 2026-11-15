<?php

namespace App\Enums;


enum JenisItem: string
{
    case Paket = 'paket';
    case Nasi = 'nasi';
    case Lauk = 'lauk';
    case Sayur = 'sayur';
    case Tambahan = 'tambahan';
    case Minuman = 'minuman';

    public function label(): string
    {
        return ucfirst($this->value);
    }
}
