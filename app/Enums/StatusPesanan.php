<?php

namespace App\Enums;

enum StatusPesanan: string
{
    case MenungguKonfirmasi = 'menunggu_konfirmasi';
    case Diterima = 'diterima';
    case Ditolak = 'ditolak';
    case Disiapkan = 'disiapkan';
    case SiapDiambil = 'siap_diambil';
    case Selesai = 'selesai';

    public function label(): string
    {
        return match ($this) {
            self::MenungguKonfirmasi => 'Menunggu konfirmasi',
            self::Diterima => 'Diterima',
            self::Ditolak => 'Ditolak',
            self::Disiapkan => 'Disiapkan',
            self::SiapDiambil => 'Siap diambil',
            self::Selesai => 'Selesai',
        };
    }

    /**
     * 
     *
     * @return array<int, self>
     */
    public function transisiSah(): array
    {
        return match ($this) {
            self::MenungguKonfirmasi => [self::Diterima, self::Ditolak],
            self::Diterima => [self::Disiapkan],
            self::Disiapkan => [self::SiapDiambil],
            self::SiapDiambil => [self::Selesai],
            self::Ditolak, self::Selesai => [],
        };
    }

    public function bolehKe(self $baru): bool
    {
        return in_array($baru, $this->transisiSah(), true);
    }

    public function final(): bool
    {
        return $this->transisiSah() === [];
    }
}
