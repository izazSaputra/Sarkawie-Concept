<?php

namespace Database\Seeders;

use App\Models\AturanKombinasi;
use App\Models\ItemMenu;
use App\Models\PengaturanWarung;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WarungSeeder extends Seeder
{
    public function run(): void
    {
        PengaturanWarung::updateOrCreate(['id' => 1], [
            'nama_resmi' => 'Warung Masakan Jawa',
            'alamat' => 'Alamat warung (belum diisi)',
            'kontak' => 'Nomor kontak warung (belum diisi)',
            'jam_buka' => '08.00 - 20.00 WIB',
            'info_pengambilan' => 'Pesanan diambil di warung. Bayar saat mengambil pesanan.',
            'pemesanan_dibuka' => true,
        ]);

        $menu = [
            ['Nasi Putih', 'nasi', 4000, 'Nasi pulen hangat satu porsi', ['Tidak pedas'], true],
            ['Nasi Gudeg Komplit', 'paket', 18000, 'Gudeg nangka, krecek pedas gurih, telur bacem', ['Tidak pedas'], true],
            ['Telur Balado', 'lauk', 5000, 'Telur goreng dengan sambal balado', ['Pedas'], true],
            ['Telur Bacem', 'lauk', 4500, 'Bacem manis gurih bumbu rempah Jawa', ['Tidak pedas'], true],
            ['Ayam Goreng Lengkuas', 'lauk', 14000, 'Ayam goreng rempah dengan taburan serundeng lengkuas', ['Tidak pedas'], true],
            ['Mangut Lele Asap', 'lauk', 15000, 'Lele asap kuah santan pedas gurih', ['Pedas'], true],
            ['Sayur Lodeh Tahu Tempe', 'sayur', 6000, 'Sayur lodeh santan gurih isi tahu dan tempe', ['Tidak pedas'], true],
            ['Sayur Bening', 'sayur', 4000, 'Sayur bening bayam dan jagung manis segar', ['Tidak pedas'], true],
            ['Sambal Terasi', 'tambahan', 3000, 'Sambal terasi ulek segar khas Jawa', ['Pedas'], true],
            ['Es Teh Melati', 'minuman', 3500, 'Teh melati wangi segar disajikan dingin', [], true],
            ['Es Beras Kencur', 'minuman', 5000, 'Minuman tradisional beras kencur manis segar', [], true],
            ['Rawon Daging Sapi', 'lauk', 19000, 'Kuah kluwek hitam gurih khas Jawa Timur', [], false],
        ];

        foreach ($menu as [$nama, $jenis, $harga, $keterangan, $label, $tersedia]) {
            ItemMenu::updateOrCreate(['nama' => $nama], [
                'jenis' => $jenis,
                'harga' => $harga,
                'keterangan' => $keterangan,
                'label' => $label,
                'aktif' => true,
                'tersedia' => $tersedia,
            ]);
        }

        $aturan = [
            'makanan_lengkap' => [['paket'], ['nasi', 'lauk', 'sayur']],
            'lauk_saja' => [['lauk']],
            'termasuk_minuman' => [['paket', 'minuman'], ['nasi', 'lauk', 'sayur', 'minuman']],
        ];

        foreach ($aturan as $jenisHasil => $pola) {
            AturanKombinasi::updateOrCreate(['jenis_hasil' => $jenisHasil], [
                'pola_komponen' => $pola,
                'dikonfirmasi_mitra' => false,
            ]);
        }

        User::updateOrCreate(['email' => 'admin@warung.test'], [
            'name' => 'Pengelola Warung',
            'password' => Hash::make('password'),
        ]);
    }
}
