<?php

namespace Tests\Unit;

use App\Enums\StatusPesanan;
use PHPUnit\Framework\TestCase;

class StatusPesananTest extends TestCase
{
    public function test_alur_normal_diizinkan(): void
    {
        $this->assertTrue(StatusPesanan::MenungguKonfirmasi->bolehKe(StatusPesanan::Diterima));
        $this->assertTrue(StatusPesanan::MenungguKonfirmasi->bolehKe(StatusPesanan::Ditolak));
        $this->assertTrue(StatusPesanan::Diterima->bolehKe(StatusPesanan::Disiapkan));
        $this->assertTrue(StatusPesanan::Disiapkan->bolehKe(StatusPesanan::SiapDiambil));
        $this->assertTrue(StatusPesanan::SiapDiambil->bolehKe(StatusPesanan::Selesai));
    }

    public function test_lompat_tahap_ditolak(): void
    {
        $this->assertFalse(StatusPesanan::MenungguKonfirmasi->bolehKe(StatusPesanan::Disiapkan));
        $this->assertFalse(StatusPesanan::Diterima->bolehKe(StatusPesanan::Selesai));
        $this->assertFalse(StatusPesanan::Diterima->bolehKe(StatusPesanan::Ditolak));
    }

    public function test_status_final_tidak_bisa_berubah(): void
    {
        $this->assertTrue(StatusPesanan::Ditolak->final());
        $this->assertTrue(StatusPesanan::Selesai->final());
        $this->assertFalse(StatusPesanan::Ditolak->bolehKe(StatusPesanan::Diterima));
        $this->assertFalse(StatusPesanan::Selesai->bolehKe(StatusPesanan::SiapDiambil));
    }
}
