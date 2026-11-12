# PRD — Website Pemesanan Toko SRC / Warung Masakan Jawa

| Informasi | Keterangan |
| --- | --- |
| Nama kerja produk | Website Toko SRC / Warung Masakan Jawa |
| Versi dokumen | 1.0 — Draft untuk bahan proposal dan diskusi mitra |
| Tanggal | 18 Oktober 2026 |
| Platform | Website responsif, diutamakan nyaman digunakan lewat ponsel |
| Pengguna utama | Pelanggan dan pengelola warung |
| Status | Rancangan kebutuhan; fitur di dokumen ini belum tentu sudah dibuat |

> **Catatan nama:** “Toko SRC” dan “warung masakan Jawa” masih dipakai sebagai nama kerja sesuai arahan tim. Pastikan nama resmi mitra dan apakah toko SRC dan warung makan adalah satu usaha sebelum proposal final.

## 1. Ringkasan

Produk yang diusulkan adalah website untuk melihat menu warung, mencari pilihan makan sesuai anggaran dan selera, lalu mengirim pesanan untuk dikonfirmasi penjual. Pengelola warung memperbarui menu dan ketersediaan serta memproses pesanan dari satu halaman.

Gagasan utamanya sederhana:

> **“Uang makan saya segini. Saya ingin makan seperti ini. Pilihan yang tersedia apa?”**

Fitur pembeda yang diusulkan adalah **Cari Makan Sesuai Budget**. Pelanggan dapat menentukan batas uang, memilih apakah mencari makanan lengkap atau lauk saja, menyertakan minuman jika mau, lalu melihat kombinasi menu yang memenuhi pilihan itu. Pelanggan juga tetap dapat memilih sendiri melalui menu biasa.

Website menjadi kanal tambahan. Pelanggan yang datang langsung tetap bisa memesan secara lisan. Sistem paling berguna untuk pelanggan yang ingin melihat pilihan sebelum datang, menghitung total lebih dahulu, atau mengirim pesanan saat sedang berada di kampus, kantor, atau rumah.

## 2. Masalah yang ingin diselesaikan

Masalah di bawah adalah hipotesis awal berdasarkan percakapan tim dan foto menu. Validasi kepada pemilik dan pelanggan diperlukan sebelum menganggapnya sebagai fakta.

| Hipotesis | Dampak yang mungkin terjadi | Respons yang diusulkan |
| --- | --- | --- |
| Pelanggan belum tahu pilihan dan harga sebelum tiba | Perlu bertanya dulu atau baru memutuskan saat di warung | Menu dan harga dapat dilihat dari ponsel |
| Pelanggan memiliki batas uang makan | Sulit memastikan kombinasi makanan sesuai budget | Sistem menyarankan pilihan dengan total harga yang terlihat |
| Menu atau stok berubah | Pelanggan mungkin memesan barang yang sudah habis | Pengelola dapat menandai menu tersedia atau habis |
| Pesanan lewat pesan pribadi bisa bercampur dengan chat lain | Rincian pesanan berisiko terlewat atau perlu ditanyakan ulang | Pesanan online masuk dengan format menu, jumlah, catatan, dan waktu ambil |
| Pelanggan ingin mengambil makanan tanpa menunggu lama | Waktu dan kesiapan pesanan belum jelas | Pesanan dikonfirmasi dan statusnya dapat dilihat |

## 3. Tujuan produk

- Membantu pelanggan memutuskan makanan dan mengetahui perkiraan total sebelum memesan.
- Menyediakan cara pesan tambahan bagi pelanggan yang belum berada di warung.
- Membantu penjual melihat rincian pesanan online secara teratur.
- Memudahkan penjual memberi tahu pelanggan ketika pesanan diterima, perlu diubah, atau tidak dapat dipenuhi.
- Menguji apakah pencarian berdasarkan anggaran benar-benar bermanfaat bagi pelanggan dan mitra.

### Bukan tujuan versi awal

- Menggantikan layanan langsung di warung.
- Mengklaim bahwa website pasti menaikkan penjualan atau menghilangkan antrean.
- Menjadi aplikasi kurir, kasir/POS, pembukuan lengkap, atau sistem pengelolaan bahan baku.
- Menyediakan rekomendasi AI yang tidak dapat dijelaskan.

## 4. Pengguna

| Pengguna | Kebutuhan | Hak dan aktivitas |
| --- | --- | --- |
| Pengunjung/pelanggan | Melihat menu, harga, pilihan menurut budget, dan informasi warung | Menjelajah menu dan kalkulator budget tanpa harus membuat akun |
| Pelanggan yang memesan | Mengirim pesanan dan mengetahui konfirmasi/statusnya | Mengisi nama dan kontak seperlunya, memilih menu, jumlah, catatan, serta waktu perkiraan ambil |
| Pengelola warung | Menjaga menu dan pesanan online tetap akurat | Masuk ke halaman pengelola, memperbarui menu/ketersediaan, menerima/menolak pesanan, memperbarui status |

Untuk MVP, peran pengelola cukup satu. Pemisahan menjadi admin, kasir, dan dapur hanya diperlukan jika operasional mitra memang membutuhkannya.

## 5. Cakupan MVP

### Termasuk

1. Halaman beranda berisi pengenalan warung, jam buka, lokasi/kontak yang dikonfirmasi mitra, dan tombol lihat menu.
2. Menu makanan dan minuman dengan harga, kategori, foto opsional, keterangan singkat, dan status tersedia/habis.
3. Pencarian atau penyaringan menu berdasarkan kategori, harga, serta label makanan yang dikonfirmasi pengelola, misalnya pedas/tidak pedas atau lauk saja.
4. Fitur Cari Makan Sesuai Budget yang memberikan kombinasi menu beserta perincian harga.
5. Keranjang dengan jumlah item, catatan, serta total yang dihitung otomatis.
6. Pengiriman pesanan untuk diambil di warung, termasuk nama, nomor kontak jika dibutuhkan, dan waktu ambil pilihan.
7. Konfirmasi pengelola dan status pesanan sederhana.
8. Halaman pengelola untuk mengubah menu, harga, ketersediaan, jam/tutup sementara, dan memproses pesanan.
9. Ringkasan sederhana pesanan online selesai dan item yang paling sering dipesan melalui website.

### Di luar MVP

- Pembayaran digital otomatis, payment gateway, refund otomatis, dan integrasi QRIS/POS.
- Pengantaran dan pelacakan kurir.
- Pesanan terjadwal untuk beberapa hari atau langganan makan.
- Penghitungan stok otomatis dari penjualan langsung di warung.
- Pesan bareng untuk banyak orang dalam satu tautan.
- Loyalty point, voucher bertingkat, referral, dan gamifikasi.
- AI/chatbot generatif dan rekomendasi berdasarkan profil atau riwayat kompleks.
- Aplikasi ponsel native dan banyak cabang.

## 6. Penjelasan fitur dengan bahasa sederhana

| Fitur | Maksudnya | Contoh |
| --- | --- | --- |
| **Menu hari ini** | Daftar makanan/minuman yang dijual, harganya, dan apakah masih tersedia | Pelanggan melihat pecel tersedia, sedangkan ayam kecap sedang habis |
| **Cari Makan Sesuai Budget** ⭐ | Pelanggan memasukkan batas uang; website menyaring atau menyusun kombinasi menu yang tidak melewati batas | “Budget Rp15.000, makan lengkap, tambah minum kalau cukup.” Website menunjukkan beberapa opsi dan totalnya |
| **Pilih jenis pembelian** | Pelanggan menentukan apakah mencari makanan lengkap, lauk saja, atau makanan plus minuman | Jika lauknya dibeli untuk dibawa pulang dan nasi sudah ada, pilih lauk saja |
| **Racik keranjang** | Pelanggan memilih item dan jumlah sendiri; total langsung dihitung | Pilih nasi, telur, dan es teh lalu lihat total sebelum mengirim pesanan |
| **Filter selera** | Pelanggan menyaring berdasarkan informasi yang benar-benar diisi penjual | Pilih “tidak pedas” jika label itu sudah ditetapkan untuk menu tersebut |
| **Pesan untuk diambil** | Pelanggan mengirim pesanan dari web dan mengambilnya di warung setelah diterima | Pesan sebelum berangkat; warung mengonfirmasi apakah pesanan dapat disiapkan |
| **Status pesanan** | Pelanggan mengetahui tahap pesanan tanpa harus menebak | Menunggu konfirmasi → diterima/disiapkan → siap diambil atau ditolak |
| **Menu tersedia/habis** | Pengelola mengubah status dengan satu aksi ketika stok menu berubah | Setelah ayam krispi habis, item tidak lagi dapat ditambahkan ke pesanan baru |
| **Pesan lagi** | Pelanggan melihat riwayat sederhana dan memilih item yang sama lagi | Pesanan lama dimasukkan ke keranjang; harga dan stok terkini tetap diperiksa |

Fitur unik utama adalah gabungan **budget + pilihan makan lengkap/lauk saja + menu yang tersedia + jumlah total yang terlihat**. “Unik” di sini berarti fokus pembeda untuk produk tim, bukan klaim bahwa tidak ada website lain yang memiliki fungsi serupa.

## 7. Cara kerja fitur budget

1. Pelanggan memasukkan budget maksimal.
2. Pelanggan memilih jenis hasil: makanan lengkap, lauk saja, atau termasuk minuman.
3. Pelanggan boleh menambah preferensi yang datanya tersedia, seperti kategori makanan atau label pedas.
4. Sistem mengambil hanya item aktif dan tersedia.
5. Sistem menyusun kombinasi yang totalnya tidak melebihi budget. Harga kombinasi dan item penyusunnya ditampilkan.
6. Pelanggan memilih hasil, mengubah jumlah/item jika mau, lalu memasukkan ke keranjang.
7. Saat checkout, harga dan ketersediaan diperiksa lagi. Pesanan baru menjadi pasti setelah dikonfirmasi pengelola.

### Aturan rekomendasi budget

- Sistem tidak mengarang menu, harga, atau ukuran porsi. Semua berasal dari data pengelola.
- Hasil kombinasi mengikuti aturan menu: apakah nasi dan lauk dijual terpisah atau dalam paket.
- Jika penjual hanya menjual paket tetap, rekomendasi memakai paket dan tambahan yang diizinkan; sistem tidak memecah harga paket.
- Harga total tidak boleh melampaui budget yang dimasukkan.
- Bila tidak ada kombinasi yang cocok, sistem menjelaskan pilihan termurah yang tersedia atau meminta pelanggan menaikkan budget.
- Hasil menjelaskan rincian hitungan, misalnya “nasi RpX + telur RpY + es teh RpZ = RpN”.
- Pilihan makanan lengkap hanya ditampilkan bila komponen nasi/lauk atau paket lengkap memang dikonfirmasi mitra.
- Urutan hasil dapat dimulai dari kombinasi yang paling mendekati budget tanpa melewatinya, lalu variasi berdasarkan kategori. Aturan akhir perlu disesuaikan dengan menu nyata.

## 8. Alur penggunaan

### Alur pelanggan

1. Membuka halaman warung dari ponsel.
2. Melihat menu atau menggunakan Cari Makan Sesuai Budget.
3. Memilih menu, jumlah, serta catatan yang relevan.
4. Melihat total dan mengirim pesanan untuk diambil.
5. Menunggu pengelola menerima atau memberi tahu perubahan.
6. Jika diterima, datang mengambil pesanan dan membayar sesuai cara yang disepakati mitra.

### Alur pengelola

1. Masuk ke halaman pengelola.
2. Memastikan menu, harga, serta ketersediaan hari itu benar.
3. Melihat pesanan baru beserta item, jumlah, catatan, nama/kontak, dan waktu ambil.
4. Menerima atau menolak pesanan; jika stok berubah, memberi tahu pelanggan item apa yang perlu diganti.
5. Mengubah status ke sedang disiapkan dan siap diambil.
6. Menandai selesai setelah pesanan diserahkan dan pembayaran diterima bila pembayaran dilakukan di tempat.

### Status pesanan yang diusulkan

**Menunggu konfirmasi → Diterima / Ditolak → Disiapkan → Siap diambil → Selesai**

Pesanan yang ditolak menyimpan alasan sederhana, misalnya menu habis atau warung tidak dapat menerima pesanan pada waktu tersebut. Status final tidak dapat diubah oleh pelanggan.

## 9. Kebutuhan fungsional dan kriteria penerimaan

### FR-01 — Informasi warung

- Halaman beranda memuat nama resmi, alamat/peta, jam buka, kontak, dan informasi pengambilan setelah disetujui mitra.
- Kontak dan lokasi tidak diambil sebagai kebenaran dari foto menu; pemilik harus mengonfirmasi ulang.
- **Diterima jika:** informasi penting mudah ditemukan dari ponsel dan jam tutup/pemesanan berhenti ditampilkan dengan jelas.

### FR-02 — Katalog makanan dan minuman

- Item memiliki nama, kategori, harga, keterangan opsional, foto opsional, dan status aktif/tersedia.
- Item dapat berupa paket, lauk, makanan tambahan, atau minuman. Jenis item menentukan kombinasi yang boleh dibuat.
- Label seperti pedas, tidak pedas, berkuah, atau lauk saja hanya digunakan jika dikonfirmasi pengelola.
- Pengunjung dapat melihat menu tanpa login.
- **Diterima jika:** item habis tidak dapat dibeli dan kategori tidak membuat harga atau komponen paket menjadi ambigu.

### FR-03 — Pencarian budget

- Pelanggan memasukkan nominal maksimal dalam rupiah dan jenis hasil yang diinginkan.
- Sistem hanya menyarankan item dan kombinasi yang tersedia serta sesuai struktur harga yang dikonfigurasi.
- Setiap hasil memperlihatkan nama item, harga setiap item, dan total.
- Hasil dapat dimasukkan ke keranjang untuk diedit.
- **Diterima jika:** total selalu sama dengan penjumlahan item, tidak melampaui budget, dan halaman memberi respons jelas ketika tidak ada hasil.

### FR-04 — Keranjang dan pemesanan

- Pelanggan dapat mengubah jumlah, menghapus item, menambah catatan, dan melihat total sebelum mengirim pesanan.
- Pesanan memerlukan nama dan informasi kontak secukupnya agar pengelola dapat mengonfirmasi. Kebutuhan nomor telepon diputuskan bersama mitra.
- Pesanan memiliki waktu pengiriman dan waktu pengambilan yang diminta pelanggan; pilihan waktu adalah permintaan, bukan jaminan sampai diterima penjual.
- Aplikasi menampilkan nomor pesanan dan status menunggu konfirmasi setelah pesanan berhasil direkam.
- **Diterima jika:** server menghitung harga, keranjang kosong ditolak, pesanan berulang karena tombol ditekan dua kali tidak menggandakan pesanan, dan pelanggan melihat konfirmasi bahwa pesanan belum pasti sampai disetujui.

### FR-05 — Konfirmasi dan status

- Pengelola dapat menerima atau menolak pesanan baru.
- Pengelola dapat memberi status disiapkan, siap diambil, dan selesai sesuai alur yang diizinkan.
- Penolakan memerlukan alasan; perubahan status menyimpan waktu.
- Pelanggan dapat membuka halaman status dengan nomor pesanan dan mekanisme akses yang aman.
- **Diterima jika:** status yang melompati langkah tidak sah ditolak dan pelanggan tidak bisa mengubah status pesanan.

### FR-06 — Pengelolaan menu dan ketersediaan

- Pengelola dapat menambah/mengubah harga dan deskripsi, mengaktifkan/menonaktifkan item, serta menandai tersedia/habis.
- Pengelola dapat menutup pemesanan sementara ketika warung tutup atau sedang sibuk.
- Perubahan harga berlaku untuk pesanan baru; pesanan yang telah dibuat mempertahankan snapshot harga saat checkout.
- **Diterima jika:** menu yang sudah dipesan tetap terbaca di riwayat dan perubahan stok menghentikan pesanan baru untuk item tersebut.

### FR-07 — Riwayat dan pesan lagi

- Pelanggan dapat mencari pesanan sebelumnya menggunakan kode pesanan atau kontak yang diberikan saat pemesanan.
- Akses riwayat tidak membuka data pelanggan lain.
- Pesan lagi membentuk keranjang baru dan memeriksa harga serta ketersediaan terbaru.
- **Diterima jika:** item yang habis atau harganya berubah ditandai sebelum pesanan dikirim ulang.

### FR-08 — Ringkasan penjual

- Pengelola melihat daftar pesanan online berdasarkan status dan waktu.
- Ringkasan sederhana menunjukkan jumlah pesanan online selesai dan item terlaris dari pesanan website pada rentang tanggal.
- Laporan membedakan penjualan website dari penjualan langsung yang tidak dicatat sistem.
- **Diterima jika:** angka laporan dapat dicocokkan dengan daftar pesanan online yang selesai.

## 10. Data menu yang terlihat di foto

Foto papan menu yang diberikan pelanggan miring dan sisi kiri serta sebagian harga terpotong. Daftar di bawah adalah **pembacaan sementara**, bukan data katalog final.

| Teks yang tampak/dugaan pembacaan | Harga yang tampak | Kepastian |
| --- | ---: | --- |
| Nasi campur | Rp12.000 | Nama dan harga terlihat, perlu konfirmasi apakah harga paket |
| Nasi telur (dugaan: teks terlihat “...I TELUR”) | Rp3.000 | Nama awal terpotong; kemungkinan harga lauk/tambahan |
| Soto ayam (dugaan: teks terlihat “...O AYAM”) | Rp10.000 | Nama belum terbaca utuh |
| Ayam goreng (dugaan: teks terlihat “... GORENG”) | Rp6.000 | Nama awal terpotong; perlu konfirmasi bagian/porsi |
| Ampela | Rp5.000 | Terlihat; perlu konfirmasi porsi dan cara jual |
| Ayam krispi (dugaan: teks terlihat “...M KRISPI”) | Rp7.000 | Nama awal terpotong |
| Ayam kecap (dugaan: teks terlihat “...M KECAP”) | Rp7.000 | Nama awal terpotong |
| Sambal balado (dugaan: teks terlihat “...KOL BALADO”) | Tidak terbaca | Nama dan harga perlu foto/menu yang lebih jelas |
| Pecel | Rp10.000 | Nama dan harga tampak |
| Kopi hitam, kopi susu, teh anget, es teh, es jeruk | Harga per item tidak terbaca | Papan hanya memperlihatkan tulisan “Mulai Dari 10.000” di dekat bagian minuman; pemetaan harga tidak dapat dipastikan |

Nomor WhatsApp pada papan tampak tercetak, tetapi perlu diminta langsung dan dikonfirmasi pemilik sebelum dicantumkan di produk. Foto menu tersebut juga belum memastikan apakah item-item yang terdaftar merupakan lauk saja, paket dengan nasi, atau tambahan.

## 11. Asumsi awal yang harus divalidasi

- Mitra mengizinkan pelanggan memesan melalui website dan mengambil di lokasi.
- Penjual dapat membuka halaman pengelola untuk menerima pesanan serta mengubah menu habis.
- Pelanggan dapat memesan tanpa membuat akun; identitas/kontak minimum dikumpulkan untuk konfirmasi.
- Pembayaran MVP dilakukan saat mengambil pesanan kecuali mitra meminta cara lain.
- Stok MVP adalah status tersedia/habis manual, bukan stok otomatis dari transaksi toko fisik.
- Waktu ambil yang dipilih pelanggan perlu dikonfirmasi penjual sebelum dianggap disepakati.
- Website tidak memaksa semua pembeli memakai sistem; pembelian lisan tetap berjalan sesuai praktik mitra.
- Teknologi mengikuti proyek yang sudah ada; dokumen ini tidak menetapkan hosting, basis data, payment gateway, atau integrasi eksternal.

## 12. Kebutuhan nonfungsional

- **Mudah digunakan:** alur pelanggan ringkas, teks harga terbaca di layar ponsel, dan tombol pesan terlihat jelas.
- **Aksesibilitas:** teks memiliki kontras memadai, input memiliki label, menu dapat digunakan dengan keyboard, dan status tidak dibedakan hanya dengan warna.
- **Keamanan:** hanya pengelola terdaftar yang dapat mengubah harga, menu, status, serta pesanan. Pelanggan tidak dapat membaca data pribadi pelanggan lain.
- **Keakuratan harga:** total dihitung di server dari harga katalog; browser tidak menjadi sumber harga final.
- **Privasi:** hanya kumpulkan data yang dibutuhkan untuk menerima dan menyerahkan pesanan. Jangan tampilkan nomor kontak secara publik.
- **Keandalan:** sistem menunjukkan kegagalan dengan jelas dan tidak mengaku pesanan berhasil bila penyimpanan gagal.
- **Operasional ringan:** perubahan ketersediaan harus dapat dilakukan pengelola dengan sedikit langkah dan dari ponsel.

## 13. Ukuran keberhasilan

Target angka ditentukan setelah baseline dan masa uji disepakati. MVP dinilai bermanfaat bila pelanggan dapat menyelesaikan alur tanpa bantuan, pengelola dapat memproses pesanan melalui layar pesanan, dan harga/status yang terlihat sesuai keadaan warung.

| Ukuran | Cara melihat |
| --- | --- |
| Penggunaan fitur budget | Jumlah sesi fitur budget yang menampilkan hasil dan kombinasi yang dimasukkan ke keranjang |
| Ketepatan anggaran | Jumlah checkout dengan total sesuai rincian dan di bawah atau sama dengan budget yang diminta |
| Pesanan berhasil dikonfirmasi | Pesanan diterima dibandingkan semua pesanan yang dikirim |
| Pesanan selesai | Pesanan selesai dibandingkan pesanan yang diterima |
| Akurasi ketersediaan | Pesanan yang tidak perlu ditolak karena menu ternyata habis |
| Beban pengelola | Umpan balik pengelola tentang waktu dan langkah untuk memperbarui menu serta memproses pesanan |

Jangan menyimpulkan peningkatan pendapatan atau berkurangnya antrean hanya dari penggunaan website; ukur terpisah bersama mitra jika itu menjadi tujuan evaluasi.

## 14. Skenario uji penerimaan

1. Pelanggan memasukkan budget, memilih makanan lengkap, lalu hanya menerima hasil yang totalnya tidak melampaui budget.
2. Bila menu hanya berupa lauk satuan, sistem tidak menampilkannya seolah sudah termasuk nasi.
3. Pelanggan memasukkan budget yang tidak cukup untuk satu paket; sistem menjelaskan harga paket termurah yang tersedia.
4. Pelanggan memilih kombinasi dan total keranjang sama dengan rincian harga yang ditampilkan.
5. Pengelola menandai item habis; item itu tidak bisa dipesan setelah perubahan berlaku.
6. Pelanggan mengirim pesanan; status awal menunjukkan menunggu konfirmasi, bukan langsung diterima.
7. Pengelola menolak pesanan karena stok habis; alasan terlihat oleh pelanggan.
8. Pelanggan meminta waktu ambil; waktu tersebut tampil sebagai permintaan sampai pengelola menerima pesanan.
9. Harga berubah setelah pesanan sebelumnya dibuat; pesanan lama tetap mencatat harga saat dibuat, sedangkan keranjang baru memakai harga terbaru.
10. Pengguna yang tidak masuk sebagai pengelola mencoba mengubah harga atau status pesanan; sistem menolak.

## 15. Risiko dan pertanyaan untuk mitra

| Pertanyaan | Mengapa perlu dijawab |
| --- | --- |
| Apa nama resmi usaha dan apakah toko SRC serta warung makan satu usaha? | Menentukan judul, ruang lingkup, identitas visual, dan halaman informasi |
| Apa daftar menu serta harga lengkap yang berlaku sekarang? | Foto terpotong dan beberapa harga minuman tidak terlihat |
| Harga lauk termasuk nasi atau lauk saja? Mana yang dijual sebagai paket? | Menentukan kebenaran kalkulator budget dan keranjang |
| Apakah ada pilihan porsi, sambal, tingkat pedas, atau catatan khusus? | Menentukan opsi yang boleh dipilih pelanggan |
| Bagaimana pelanggan membayar dan kapan pesanan mulai dibuat? | Mencegah pesanan palsu atau pesanan yang belum dibayar dibuat terlalu dini |
| Apakah waktu ambil dapat dipilih? Berapa lama persiapan biasanya? | Menentukan apakah fitur waktu ambil layak dijanjikan |
| Siapa yang akan memperbarui status menu habis dan memantau pesanan? | Fitur stok/menu hanya akurat jika ada penanggung jawab |
| Apakah pesanan dibatasi jumlahnya saat jam ramai? | Menghindari terlalu banyak pesanan pada waktu yang sama |
| Apa alamat, jam buka, nomor kontak, serta foto yang boleh dipakai? | Informasi harus benar dan penggunaannya diizinkan |
| Apa rubrik dan tenggat tugas, serta fitur mana yang harus didemonstrasikan? | Menjaga cakupan proyek sesuai kebutuhan akademik dan kapasitas tim |

## 16. Tahapan pengerjaan yang disarankan

| Tahap | Hasil |
| --- | --- |
| 1. Validasi mitra | Nama, menu, harga, paket, alur pesanan, pembayaran, dan penanggung jawab disepakati |
| 2. Katalog dan halaman pengelola | Pengelola dapat memperbarui item serta status tersedia/habis |
| 3. Pengalaman pelanggan | Halaman menu, filter, kalkulator budget, dan keranjang |
| 4. Pesanan | Kirim pesanan, konfirmasi, perubahan status, serta halaman pengambilan |
| 5. Uji coba terbatas | Skenario penerimaan diuji bersama pelanggan dan pengelola; masalah operasional dicatat |

Urutan pengerjaan akhir mengikuti tenggat tugas dan kesediaan mitra. Kalkulator budget baru dapat dibuat secara akurat setelah jenis paket, item satuan, dan harga dikonfirmasi.

## 17. Ringkasan untuk presentasi

> “Kami mengusulkan website pemesanan untuk membantu pelanggan melihat menu dan harga sebelum datang, serta mencari pilihan makan yang sesuai dengan anggaran. Pelanggan dapat mengirim pesanan untuk dikonfirmasi warung, sedangkan pengelola memperbarui ketersediaan dan memproses pesanan dari satu halaman. Pembelian langsung tetap dilayani. Manfaatnya akan diuji bersama mitra, terutama apakah pencarian budget dan pencatatan pesanan online benar-benar membantu.”

## 18. Prompt untuk Claude: buat proposal dari PRD ini

Salin prompt berikut setelah melampirkan atau menempelkan PRD ini:

```text
Buat proposal proyek berbahasa Indonesia berdasarkan PRD terlampir untuk tugas kelompok dengan mitra Toko SRC / warung masakan Jawa.

Gunakan hanya fakta yang tercantum dalam PRD. Jangan mengarang data mitra, alamat, harga, jumlah pelanggan, hasil survei, atau klaim bahwa sistem pasti meningkatkan penjualan. Tandai setiap asumsi dan pertanyaan yang belum terjawab sebagai hal yang perlu divalidasi.

Jelaskan masalah, alasan sistem dibutuhkan meski pelanggan tetap bisa membeli langsung, manfaat untuk pelanggan dan pengelola, solusi yang diusulkan, alur penggunaan, fitur MVP, pembeda Cari Makan Sesuai Budget, batasan sistem, kebutuhan pengguna, risiko, tahapan pengerjaan, dan cara mengukur keberhasilan. Terangkan dengan bahasa yang mudah dipahami oleh dosen dan mitra UMKM. Bedakan fitur MVP dari fitur yang ditunda. Jangan menyebut fitur sebagai unik di seluruh dunia; sebut sebagai pembeda yang diusulkan untuk proyek ini.

Susun proposal dengan format rapi: judul, latar belakang, rumusan masalah, tujuan, manfaat, ruang lingkup, analisis kebutuhan, rancangan solusi, alur sistem, rencana implementasi, pengujian/evaluasi, risiko dan asumsi, lalu penutup. Jika informasi dari PRD belum cukup untuk bagian tertentu, buat bagian “Perlu dikonfirmasi” alih-alih mengisi dengan fakta rekaan.
```
