# PRD — Warung Kopie Sarkawie

| Informasi | Nilai |
| --- | --- |
| Produk | Website pemesanan dan eksplorasi kopi Warung Kopie Sarkawie |
| Versi dokumen | 0.1 — Draft untuk diskusi tim dan mitra |
| Tanggal | 19 September 2026 |
| Platform | Website responsif berbasis Laravel |
| Pengguna | Customer, barista, dan admin/pemilik |
| Status implementasi | Dokumen kebutuhan; bukan daftar fitur yang sudah tersedia |

## 1. Ringkasan produk

Website ini membantu pelanggan melihat menu, menemukan kopi sesuai selera, memesan untuk diambil di kedai, dan mengoleksi origin kopi yang pernah dibeli melalui Coffee Passport. Pelanggan mendapatkan poin yang dapat digunakan untuk reward. Barista mengelola antrean pesanan, sementara admin mengelola katalog, reward, dan ringkasan transaksi.

Penjelasan sederhananya: **pilih kopi yang cocok → pesan → ambil kopi → koleksi origin → kumpulkan poin → coba kopi lain.**

Pembeda yang ingin dibangun adalah hubungan antara rekomendasi rasa dan eksplorasi origin. Find Your Coffee membantu pelanggan menentukan pilihan pertama, sedangkan Coffee Passport memberi alasan untuk kembali dan mencoba origin lain. Ini merupakan arah produk, bukan klaim bahwa fitur tersebut belum pernah dibuat oleh bisnis lain.

## 2. Masalah dan tujuan

Masalah berikut masih berupa hipotesis dari diskusi konsep dan perlu divalidasi melalui wawancara dengan mitra serta pelanggan:

| Hipotesis masalah | Respons produk | Hasil yang diharapkan |
| --- | --- | --- |
| Pelanggan awam sulit memahami pilihan kopi | Kuis preferensi dan penjelasan rasa sederhana | Pelanggan lebih mudah memilih |
| Menu hanya menyajikan nama dan harga | Informasi origin, rasa, tingkat sangrai, dan metode seduh | Pelanggan memahami perbedaan produk |
| Pelanggan tidak memiliki catatan kopi yang pernah dicoba | Coffee Passport | Eksplorasi origin menjadi terlihat |
| Pelanggan kurang memiliki alasan untuk kembali | Poin dan reward | Mendorong pembelian ulang |
| Pesanan perlu dicatat dan dipantau lebih rapi | Antrean dan status pesanan | Barista dan pelanggan mengetahui progres |

Tujuan versi awal adalah menyelesaikan satu alur transaksi dari pemilihan kopi sampai pencatatan passport dan poin, dengan operasional yang dapat dijalankan tim kedai.

## 3. Pengguna dan hak akses

| Peran | Kebutuhan | Hak akses |
| --- | --- | --- |
| Pengunjung | Mengenal kedai dan melihat pilihan kopi | Melihat menu, origin, dan mencoba kuis tanpa login |
| Customer | Memesan serta melihat koleksi dan reward pribadi | Mengelola profil, pesanan sendiri, passport, saldo dan riwayat poin sendiri |
| Barista | Menyiapkan serta menyerahkan pesanan | Melihat antrean operasional, mengubah status yang diizinkan, mencatat pembayaran di kedai |
| Admin/pemilik | Mengelola bisnis | Mengelola menu, origin, metode seduh, ketersediaan, reward, akun staf, serta melihat laporan |

Akun yang dibuat lewat pendaftaran publik selalu menjadi customer. Hak staf hanya dapat diberikan admin. Barista tidak dapat mengubah harga, saldo poin, atau hak akses pengguna.

## 4. Cakupan dan asumsi MVP

MVP adalah versi pertama yang dapat diuji bersama mitra. Fitur berikut termasuk dalam MVP:

1. Pendaftaran, login, logout, dan profil customer.
2. Katalog menu dan Bean Explorer sederhana berupa detail origin.
3. Find Your Coffee berbasis aturan pencocokan preferensi.
4. Keranjang, checkout, pemesanan untuk diambil di kedai, dan riwayat/status pesanan.
5. Dashboard antrean barista dan pencatatan pembayaran di kedai.
6. Coffee Passport yang diperbarui dari pesanan selesai.
7. Poin, riwayat poin, dan penukaran reward sederhana.
8. Dashboard admin untuk katalog, reward, akun staf, dan ringkasan transaksi.

Asumsi kerja berikut belum merupakan kesepakatan dengan mitra:

- Satu kedai, satu mata uang rupiah, waktu operasional mengikuti WIB.
- Customer wajib login untuk checkout; menu dan kuis terbuka untuk pengunjung.
- Pesanan diambil langsung di kedai. Pembayaran dilakukan di kedai melalui metode yang diterima mitra dan dicatat staf.
- Pemesanan hanya dibuka saat jam operasional. MVP tidak menyediakan reservasi jam pengambilan di masa depan.
- Ketersediaan diatur manual melalui status tersedia/habis, belum berdasarkan pengurangan stok gram biji.
- Nama menu, origin, harga, alamat, jam buka, dan foto harus berasal dari mitra. Data demonstrasi diberi label contoh.
- Produk kopi yang berhak mendapat stamp memiliki satu origin yang jelas. Blend tanpa origin tunggal tidak otomatis mendapatkan beberapa stamp.

## 5. Di luar MVP

- Payment gateway, verifikasi QRIS otomatis, pengembalian dana otomatis, dan integrasi POS.
- Pengantaran, integrasi kurir, reservasi meja, dan layanan multi-cabang.
- Pre-order dengan slot waktu, batas kapasitas per slot, dan penjadwalan hari berikutnya.
- Manajemen bahan baku, pembelian pemasok, dan akuntansi lengkap.
- Aplikasi Android/iOS native.
- Rekomendasi machine learning, chatbot AI, dan profil selera otomatis dari histori pembelian.
- XP, level, leaderboard, badge kompleks, referral, serta promo bertumpuk.
- Notifikasi WhatsApp, SMS, email transaksi, dan push notification.

Fitur-fitur tersebut dapat dibahas setelah alur inti stabil. MVP memakai satu mata uang poin loyalty; XP terpisah belum diperlukan.

## 6. Alur utama

### 6.1 Customer

1. Customer membuka website dan melihat menu.
2. Jika bingung, customer mengisi kuis Find Your Coffee.
3. Sistem menampilkan hingga tiga pilihan beserta alasan rekomendasi.
4. Customer memilih menu, metode seduh atau opsi yang tersedia, lalu jumlah.
5. Customer login atau mendaftar, mengecek keranjang, dan memilih reward bila memenuhi syarat.
6. Sistem memvalidasi harga, ketersediaan, jam operasional, dan reward sebelum membuat pesanan.
7. Customer mendapat nomor pesanan dan melihat progresnya.
8. Barista menyiapkan kopi; customer membayar dan mengambil pesanan di kedai.
9. Setelah pembayaran tercatat dan pesanan diserahkan, staf menandai selesai.
10. Sistem memperbarui passport serta poin, lalu menampilkan ringkasannya kepada customer.

### 6.2 Barista

1. Login ke dashboard staf dan melihat antrean berdasarkan waktu masuk.
2. Memeriksa rincian menu, metode seduh, jumlah, dan catatan.
3. Menerima pesanan dengan mengubah status menjadi Diproses, atau membatalkan dengan alasan jika belum dapat dipenuhi.
4. Mengubah status menjadi Siap Diambil setelah minuman siap.
5. Mencatat pembayaran yang benar-benar diterima dan menyerahkan pesanan.
6. Mengubah status menjadi Selesai; sistem memproses passport dan poin satu kali.

### 6.3 Admin

1. Mengisi katalog, informasi origin, opsi seduh, harga, dan jam operasional.
2. Mengatur ketersediaan serta reward yang berlaku.
3. Membuat atau menonaktifkan akses staf.
4. Memantau jumlah pesanan, nilai transaksi selesai, dan menu terlaris.

## 7. Kebutuhan fungsional dan kriteria penerimaan

### FR-01 — Akun dan akses

- Customer dapat mendaftar menggunakan nama, email, dan password, kemudian login/logout.
- Profil menyimpan identitas minimum yang diperlukan; nomor telepon hanya ditambahkan jika kebutuhan operasionalnya disepakati.
- Customer hanya dapat membuka pesanan, passport, dan riwayat poin miliknya sendiri.
- **Diterima jika:** pendaftaran tidak dapat memilih peran staf; percobaan membuka data pengguna lain atau dashboard staf ditolak oleh server.

### FR-02 — Menu interaktif dan Bean Explorer

- Daftar menu menampilkan nama, foto bila tersedia, harga awal, kategori, dan ketersediaan.
- Detail kopi menampilkan origin, deskripsi rasa, roast, intensitas rasa, pilihan metode seduh, serta harga opsi yang berlaku.
- Detail origin memuat daerah asal, cerita singkat, tasting notes, dan proses bila datanya tersedia dari mitra.
- Pengguna dapat mencari nama menu dan memfilter kategori atau origin.
- Istilah seperti fruity, acidity, dan body disertai penjelasan singkat yang mudah dimengerti.
- **Diterima jika:** menu habis tidak bisa dibeli, pilihan seduh hanya menampilkan kombinasi yang valid, dan menu nonkopi tidak diwajibkan memiliki origin.

### FR-03 — Find Your Coffee

- Kuis singkat menanyakan preferensi manis, intensitas rasa kopi, rasa fruity/asam, dan kopi dengan/tanpa susu.
- Jawaban manis menggambarkan rasa minuman akhir; intensitas menggambarkan rasa, bukan klaim kandungan kafein.
- Rekomendasi memakai atribut menu dan aturan yang dapat dijelaskan, tanpa model AI eksternal.
- Usulan awal: setiap jawaban yang cocok mendapat satu skor; jawaban tidak tahu dilewati. Menu diurutkan berdasarkan skor, kemudian nama untuk hasil seri.
- Hanya menu aktif dan tersedia yang masuk hasil. Jika tidak ada kecocokan positif atau semua jawaban dilewati, tampilkan menu tersedia dengan label pilihan umum, bukan klaim cocok.
- Tampilkan maksimal tiga rekomendasi dengan alasan, misalnya “rasa ringan dan menggunakan susu”.
- Customer yang login dapat menyimpan jawaban terakhir secara eksplisit sebagai preferensi, serta mengisinya ulang.
- **Diterima jika:** input yang sama pada katalog yang sama menghasilkan urutan yang sama, kuis tidak memaksa pembelian, dan katalog kosong menampilkan pesan yang jelas.

### FR-04 — Keranjang dan checkout

- Keranjang menyimpan menu, opsi seduh/varian yang tersedia, jumlah, catatan opsional, subtotal, reward, dan total.
- Server menghitung ulang harga dan memeriksa ketersediaan saat checkout. Perubahan harga ditampilkan untuk dikonfirmasi sebelum pesanan dibuat.
- Pesanan menyimpan salinan nama item, harga satuan, opsi, dan origin saat transaksi sehingga perubahan katalog tidak mengubah histori.
- Tombol checkout yang terkirim berulang tidak membuat pesanan ganda untuk permintaan yang sama.
- **Diterima jika:** keranjang kosong, jumlah tidak valid, kedai tutup, opsi tidak valid, atau menu habis ditolak dengan pesan yang dapat ditindaklanjuti; total tidak dapat diubah dari browser.

### FR-05 — Status pesanan dan pembayaran

Alur normal: **Masuk → Diproses → Siap Diambil → Selesai**.

| Status asal | Status tujuan | Pelaku dan syarat |
| --- | --- | --- |
| Masuk | Diproses | Barista/admin menerima pesanan |
| Masuk | Dibatalkan | Customer pemilik atau staf, selama belum dibayar; alasan dicatat |
| Diproses | Siap Diambil | Barista/admin memastikan pesanan siap |
| Diproses / Siap Diambil | Dibatalkan | Admin untuk pengecualian operasional, hanya jika belum dibayar; alasan wajib |
| Siap Diambil | Selesai | Barista/admin; sudah lunas dan sudah diserahkan |

- Status pembayaran terpisah: Belum Dibayar atau Lunas. Total nol karena reward dicatat sebagai lunas tanpa penerimaan uang.
- Pembayaran tidak dapat dicatat pada pesanan yang dibatalkan. Pesanan selesai dan dibatalkan merupakan status akhir.
- MVP tidak menyediakan pembatalan transaksi yang sudah dibayar atau refund; kasus tersebut memerlukan penanganan pemilik di luar alur aplikasi sampai kebijakannya ditetapkan.
- Setiap perubahan status dan pencatatan pembayaran menyimpan pelaku serta waktu. Koreksi pembayaran yang salah harus dibahas sebelum penggunaan operasional.
- **Diterima jika:** transisi tidak sah ditolak, pesanan belum lunas tidak bisa selesai, dan pelanggan dapat melihat status terbaru melalui refresh/pembaruan berkala tanpa memerlukan WebSocket.

### FR-06 — Coffee Passport

- Passport menampilkan origin yang telah dicoba, tanggal pertama, dan jumlah pembelian yang memenuhi syarat.
- Stamp diberikan hanya dari item kopi ber-origin pada pesanan Selesai dan Lunas.
- Satu customer memiliki paling banyak satu stamp unik per origin. Pembelian ulang menambah riwayat, bukan stamp baru.
- Jumlah kunjungan/pembelian origin dihitung per pesanan selesai yang mengandung origin tersebut, bukan per jumlah cangkir.
- Pesanan dengan beberapa origin baru memberikan satu stamp untuk setiap origin unik.
- **Diterima jika:** membuka ulang halaman atau mengirim ulang aksi selesai tidak menggandakan stamp; pesanan batal dan menu nonkopi tidak menambah stamp.

### FR-07 — Poin dan reward

Usulan angka untuk prototipe, wajib dikonfirmasi mitra:

| Aktivitas | Poin |
| --- | --- |
| Satu pesanan selesai dan lunas | +10 |
| Pertama kali mendapatkan satu stamp origin | +30 per origin baru |
| Penukaran reward contoh | 100 poin untuk potongan Rp5.000 |

- Contoh: pesanan pertama berisi dua cangkir dari satu origin baru mendapat 40 poin, bukan 80. Pesanan berikutnya dari origin yang sama mendapat 10 poin.
- Poin disimpan sebagai riwayat penambahan/pengurangan yang memiliki sumber transaksi; saldo tidak boleh negatif.
- Poin tidak kedaluwarsa dalam MVP. Kebijakan ini masih asumsi produk.
- MVP mendukung reward potongan nominal tetap, maksimal satu reward per pesanan, tanpa gabungan promo.
- Potongan tidak melebihi subtotal; poin yang dibutuhkan tetap sesuai katalog reward dan ditampilkan sebelum konfirmasi.
- Pada checkout berhasil, poin reward dipotong secara atomik. Jika checkout gagal, tidak ada pemotongan. Jika pesanan dibatalkan, poin dikembalikan tepat satu kali.
- Poin dari pesanan yang sedang dibuat belum dapat dipakai untuk membayar reward pesanan itu sendiri.
- Penukaran paralel tidak boleh memakai saldo yang sama dua kali. Pemenuhan pesanan, pemberian poin, dan stamp harus konsisten meski permintaan diulang.
- **Diterima jika:** saldo kurang menolak reward, reward nonaktif tidak dapat dipakai untuk pesanan baru, transaksi batal memulihkan poin, dan reward pada histori tidak berubah saat katalog reward diedit.

### FR-08 — Dashboard barista

- Menampilkan antrean aktif, nomor pesanan, waktu masuk, nama pemesan, rincian item, catatan, total, dan status pembayaran.
- Menyediakan filter status dan aksi sesuai transisi yang diizinkan.
- **Diterima jika:** pesanan baru dapat ditemukan tanpa akses admin, dan aksi bersamaan dari dua staf tidak menggandakan pembayaran atau penyelesaian.

### FR-09 — Pengelolaan admin

- Admin dapat menambah/mengedit/menonaktifkan menu, origin, opsi seduh, dan reward.
- Admin mengatur jam operasional serta penutupan pemesanan sementara.
- Data katalog yang pernah dipakai transaksi dinonaktifkan, bukan dihapus dengan merusak histori.
- Admin mengelola akun staf; penonaktifan mencabut akses staf termasuk sesi yang masih aktif.
- **Diterima jika:** perubahan harga hanya berlaku pada transaksi baru, katalog nonaktif hilang dari pilihan checkout, dan histori tetap dapat dibaca.

### FR-10 — Ringkasan bisnis

- Admin dapat memilih rentang tanggal untuk melihat jumlah pesanan selesai, nilai transaksi selesai setelah potongan, pembatalan, serta menu terlaris berdasarkan kuantitas item pada pesanan selesai.
- Nilai transaksi selesai bukan laporan laba dan tidak memasukkan pesanan batal atau pesanan yang belum selesai.
- **Diterima jika:** hasil ringkasan dapat dicocokkan dengan rincian pesanan pada periode WIB yang sama; rentang tanpa transaksi menampilkan nilai nol.

## 8. Halaman yang diperlukan

| Area | Halaman |
| --- | --- |
| Publik | Beranda dan informasi kedai, daftar menu, detail menu, detail origin/Bean Explorer, kuis dan hasil rekomendasi, login, daftar |
| Customer | Keranjang, checkout, detail/status pesanan, riwayat pesanan, Coffee Passport, daftar reward dan riwayat poin, profil/preferensi |
| Barista | Antrean pesanan dan detail pesanan |
| Admin | Ringkasan bisnis, pengelolaan menu/origin/metode seduh, reward, staf, pengaturan kedai, riwayat transaksi |

Tampilan mengutamakan penggunaan lewat ponsel. Aksi utama harus jelas, harga mudah ditemukan, dan istilah kopi dijelaskan dengan bahasa sederhana. Status kosong, loading, gagal, habis, dan kedai tutup harus memiliki pesan yang membantu pengguna melanjutkan.

## 9. Data inti

Bagian ini adalah kebutuhan informasi, bukan skema database final.

| Data | Informasi utama |
| --- | --- |
| Pengguna | Identitas, kredensial, peran, status akun |
| Preferensi kopi | Jawaban kuis terakhir yang disimpan customer |
| Origin | Nama, daerah, cerita, tasting notes, proses, status aktif |
| Menu dan opsi | Nama, kategori, origin opsional, profil rasa, harga, metode seduh/varian, ketersediaan |
| Pesanan dan item | Pemilik, nomor, snapshot item/harga/origin, jumlah, potongan, total, status, waktu |
| Pembayaran | Pesanan, jumlah diterima, metode, waktu, staf pencatat |
| Riwayat status | Pesanan, status asal/tujuan, pelaku, waktu, alasan |
| Passport | Customer, origin unik, pesanan pertama, tanggal pertama dan histori terkait |
| Transaksi poin | Customer, nilai positif/negatif, alasan, sumber unik, waktu |
| Reward dan penukaran | Nama, biaya poin, nominal potongan, status, snapshot penukaran, pesanan terkait |
| Pengaturan kedai | Jam operasional dan status penerimaan pesanan |

## 10. Kebutuhan nonfungsional

- **Keamanan:** pemeriksaan hak akses dilakukan di server; password disimpan dengan hashing, formulir memiliki perlindungan CSRF, input divalidasi, serta login dan checkout memiliki pembatasan permintaan.
- **Privasi:** customer hanya melihat data sendiri; staf hanya melihat data yang diperlukan untuk pelayanan. Kredensial, rahasia aplikasi, dan data pelanggan tidak dimasukkan ke repository.
- **Konsistensi:** pesanan, penukaran reward, passport, dan poin tidak boleh tercatat setengah selesai. Operasi berulang atau bersamaan harus aman dari duplikasi.
- **Kegunaan:** alur utama dapat dipakai pada lebar layar 360 piksel tanpa gulir horizontal, input memiliki label, navigasi dapat memakai keyboard, dan status tidak dibedakan hanya dengan warna.
- **Kinerja:** target awal halaman menu dan detail pesanan dapat digunakan dalam tiga detik pada lingkungan uji yang disepakati; kondisi jaringan, perangkat, dan volume data dicatat saat pengukuran.
- **Pemulihan:** sebelum penggunaan nyata, tentukan penanggung jawab backup database dan uji pemulihan. Kehilangan koneksi tidak boleh menampilkan checkout berhasil jika pesanan belum tersimpan.
- **Pemeliharaan:** gunakan aplikasi Laravel yang tersedia. Pilihan database, frontend, hosting, dan layanan tambahan ditetapkan pada perancangan teknis, bukan diasumsikan telah disepakati dalam PRD ini.

## 11. Ukuran keberhasilan

MVP dianggap siap untuk demonstrasi jika alur customer sampai passport/reward dapat dijalankan, batas hak akses bekerja, dan seluruh kriteria penerimaan kritis lolos pengujian.

Untuk pilot bersama mitra, ukur metrik berikut. Target bisnis ditetapkan setelah ada baseline; dokumen ini belum menjanjikan peningkatan penjualan.

| Metrik | Definisi |
| --- | --- |
| Penyelesaian kuis | Jumlah sesi kuis selesai dibagi sesi kuis dimulai |
| Penggunaan rekomendasi | Sesi hasil kuis yang menambahkan rekomendasi ke keranjang dibagi sesi hasil kuis |
| Keberhasilan checkout | Percobaan checkout yang menghasilkan pesanan unik dibagi percobaan checkout |
| Penyelesaian pesanan | Pesanan selesai dibagi seluruh pesanan dibuat dalam kelompok periode pengamatan yang sama |
| Pembelian ulang 30 hari | Customer dengan pembelian berikutnya dalam 30 hari dari pesanan pertama; hanya hitung customer yang telah memiliki masa observasi penuh |
| Eksplorasi origin | Jumlah origin unik per customer yang memiliki minimal satu pesanan selesai |
| Keandalan loyalty | Jumlah kasus poin/stamp ganda atau saldo negatif; target nol |

Peristiwa kuis dimulai/selesai, penambahan rekomendasi, dan checkout perlu dicatat secara minimal tanpa memuat jawaban sensitif atau kredensial. Implementasi analytics eksternal tidak diwajibkan.

## 12. Tahapan pengerjaan

| Tahap | Hasil yang harus tersedia sebelum lanjut |
| --- | --- |
| 1. Validasi mitra | Menu dan origin nyata, aturan pembayaran, pengambilan, pembatalan, jam buka, dan reward disepakati |
| 2. Fondasi | Akun/peran, katalog, origin, serta pengelolaan admin dasar |
| 3. Transaksi | Keranjang, checkout, antrean barista, pembayaran, dan status pesanan berjalan dari awal sampai akhir |
| 4. Pembeda produk | Find Your Coffee, Coffee Passport, poin, dan reward terhubung ke transaksi |
| 5. Uji dan pilot | Pengujian hak akses, transaksi bersamaan, kasus gagal, tampilan ponsel, dan uji operasional bersama mitra |

Durasi serta pembagian tugas menunggu jumlah anggota tim dan tenggat proyek. Tahap 3 merupakan fondasi transaksi; cakupan MVP lengkap baru selesai setelah tahap 5.

## 13. Skenario penerimaan utama

1. Customer baru mendapat rekomendasi, memesan satu origin baru, membayar, dan mengambil pesanan; hasilnya satu stamp dan 40 poin sesuai angka prototipe.
2. Customer membeli origin yang sama lagi; jumlah stamp tetap, riwayat bertambah, dan mendapat 10 poin.
3. Satu pesanan berisi dua origin baru; mendapat dua stamp dan 70 poin.
4. Customer memakai reward lalu membatalkan pesanan yang masih Masuk dan belum dibayar; poin dikembalikan satu kali dan tidak ada stamp baru.
5. Dua permintaan checkout mencoba menukarkan saldo yang hanya cukup untuk satu reward; hanya satu penukaran berhasil.
6. Dua staf menyelesaikan pesanan yang sama; poin, pembayaran, dan stamp tidak terduplikasi.
7. Harga atau ketersediaan berubah setelah item masuk keranjang; checkout meminta penyesuaian yang jelas, tanpa mengubah histori pesanan sebelumnya.
8. Customer mencoba membuka pesanan customer lain atau mengubah status pesanan sendiri; akses ditolak.
9. Semua menu habis atau kedai tutup; katalog tetap dapat dilihat dengan pesan yang jelas dan pesanan baru tidak diterima.
10. Pesanan belum dibayar mencoba dipindahkan ke Selesai; sistem menolak dan tidak memberikan poin atau stamp.

## 14. Risiko dan pertanyaan untuk mitra

| Hal yang belum pasti | Risiko | Keputusan yang diperlukan |
| --- | --- | --- |
| Nama resmi, identitas visual, dan izin materi | Website memakai informasi yang tidak tepat | Konfirmasi ejaan Sarkawie, logo, foto, alamat, dan hak penggunaan |
| Menu, origin, blend, dan profil rasa | Rekomendasi dan passport menyesatkan | Daftar menu nyata, atribut rasa, pemetaan origin, aturan blend |
| Pembayaran setelah pemesanan | Pesanan fiktif/no-show dan bahan terbuang | Apakah pembayaran di kedai dapat diterima; kapan barista mulai membuat kopi |
| Pembatalan/refund/koreksi pembayaran | Operasional tidak tercakup penuh | Kebijakan pemilik dan kebutuhan perluasan sebelum peluncuran nyata |
| Nominal poin dan diskon | Reward terlalu mahal bagi bisnis | Biaya poin, nilai reward, minimum belanja bila diperlukan, dan kebijakan kedaluwarsa |
| Pergantian origin musiman | Katalog dan koleksi berubah | Origin dinonaktifkan dari penjualan tetapi stamp lama tetap disimpan |
| Pengambilan dan kapasitas antrean | Pelanggan mengira ada jaminan waktu | Komunikasi waktu tunggu dan apakah slot pre-order diperlukan |
| Pengelola operasional | Status atau katalog tidak diperbarui | Siapa admin, siapa pencatat pembayaran, dan siapa memperbarui ketersediaan |
| Kebutuhan akademik dan deadline | Scope melebihi kapasitas tim | Rubrik tugas, anggota tim, tenggat, dan fitur wajib demonstrasi |

Dokumen ini menjadi dasar diskusi dan implementasi setelah asumsi prioritas dikonfirmasi. Perubahan pada alur pembayaran, status akhir, reward, dan definisi origin perlu diperbarui di PRD sebelum mengubah implementasinya.
