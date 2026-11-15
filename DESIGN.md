---
name: Warung Masakan Jawa
description: Website pemesanan warung masakan Jawa. Hangat, ramah, mudah dipakai di ponsel, dan harga selalu jelas.
colors:
  primary: "#A8321A"
  on-primary: "#FFFFFF"
  secondary: "#2F6B3F"
  on-secondary: "#FFFFFF"
  accent: "#E8A317"
  on-accent: "#2B1D14"
  background: "#FFF8EE"
  surface: "#FFFFFF"
  surface-variant: "#F6EBDA"
  on-surface: "#2B1D14"
  on-surface-muted: "#6B5648"
  outline: "#D9C7AE"
  error: "#B3261E"
  status-waiting-bg: "#FFF1CC"
  status-waiting-text: "#7A5300"
  status-accepted-bg: "#DCEBFA"
  status-accepted-text: "#0F4C81"
  status-preparing-bg: "#FDE3D3"
  status-preparing-text: "#8A3B12"
  status-ready-bg: "#D8EEDC"
  status-ready-text: "#1F5A2E"
  status-rejected-bg: "#FBDAD6"
  status-rejected-text: "#8C1D18"
  status-done-bg: "#ECE6DC"
  status-done-text: "#4A3F35"
typography:
  display:
    fontFamily: Plus Jakarta Sans
    fontSize: 28px
    fontWeight: 800
    lineHeight: 36px
  headline:
    fontFamily: Plus Jakarta Sans
    fontSize: 22px
    fontWeight: 700
    lineHeight: 30px
  title:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: 700
    lineHeight: 26px
  body:
    fontFamily: Plus Jakarta Sans
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  price:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: 800
    lineHeight: 24px
  label:
    fontFamily: Plus Jakarta Sans
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
rounded:
  sm: 6px
  md: 12px
  lg: 20px
  full: 9999px
spacing:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  page-margin: 16px
  touch-target: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.title}"
    rounded: "{rounded.md}"
    height: 48px
    padding: 0 24px
  button-secondary:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
    typography: "{typography.title}"
    rounded: "{rounded.md}"
    height: 48px
  menu-card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.on-surface}"
    rounded: "{rounded.lg}"
    padding: 16px
  chip:
    backgroundColor: "{colors.surface-variant}"
    textColor: "{colors.on-surface}"
    typography: "{typography.label}"
    rounded: "{rounded.full}"
    height: 36px
  input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.on-surface}"
    rounded: "{rounded.md}"
    height: 48px
---

# Design System: Website Pemesanan Warung Masakan Jawa

> Nama usaha masih berupa nama kerja ("Toko SRC / Warung Masakan Jawa") dan belum dikonfirmasi mitra. Pakai teks pengganti "Warung Masakan Jawa" dan jangan membuat logo. Palet di bawah adalah usulan tim, bisa diganti setelah mitra menentukan identitasnya.

## Overview

Tampilan terasa seperti warung yang hangat dan ramah, bukan aplikasi restoran mewah. Pelanggan membuka website dari ponsel, sering sambil terburu-buru, jadi layar harus bersih, tulisan besar, dan harga langsung terbaca. Nuansa Jawa dihadirkan lewat warna tanah dan rempah (merah sambal, hijau daun pisang, kuning kunyit), bukan lewat ornamen berat. Hindari gaya korporat yang dingin dan hindari tampilan yang terlalu ramai.

Prioritas desain: (1) harga dan total selalu jelas, (2) fitur Cari Makan Sesuai Budget menonjol sebagai pembeda, (3) status pesanan mudah dipahami tanpa menebak, (4) halaman pengelola cepat dipakai dengan sedikit langkah.

## Colors

- **Primary (#A8321A), merah sambal:** tombol aksi utama (Kirim Pesanan, Cari, Tambah), tautan penting, dan harga yang perlu ditonjolkan.
- **Secondary (#2F6B3F), hijau daun pisang:** tanda tersedia, tombol "Tersedia" di halaman pengelola, dan elemen pendukung.
- **Accent (#E8A317), kuning kunyit:** sorotan kecil seperti label "Hemat" atau banner fitur budget. Teks di atasnya selalu gelap.
- **Background (#FFF8EE), krem hangat:** latar halaman. **Surface (#FFFFFF)** untuk kartu dan formulir. **Surface-variant (#F6EBDA)** untuk chip dan area yang dikelompokkan.
- **On-surface (#2B1D14)** untuk teks utama, **on-surface-muted (#6B5648)** untuk keterangan. **Outline (#D9C7AE)** untuk garis tipis dan batas kartu.
- **Error (#B3261E)** untuk pesan kesalahan dan penolakan.

Warna status pesanan memakai latar muda dengan teks gelap: Menunggu konfirmasi (kuning), Diterima (biru), Disiapkan (oranye), Siap diambil (hijau), Ditolak (merah), Selesai (abu hangat). Status **tidak boleh dibedakan hanya dengan warna**: selalu sertakan ikon dan tulisan status. Kontras teks minimal 4,5:1.

## Typography

Gunakan satu keluarga font sans-serif, Plus Jakarta Sans, dengan cadangan system sans-serif. Teks isi minimal 16px agar nyaman dibaca di ponsel. Harga memakai bobot paling tebal (800) dengan format rupiah titik pemisah ribuan tanpa spasi, misalnya **Rp12.000**. Judul halaman memakai display atau headline, nama menu memakai title, keterangan dan label memakai body atau label.

## Layout

Desain mobile-first, lebar acuan 360px, tetap rapi sampai layar komputer. Satu kolom di ponsel, daftar menu menjadi grid 2 sampai 3 kolom di layar lebar. Margin halaman 16px, jarak antarkartu 16px, jarak dalam kartu 16px. Semua tombol dan input minimal 48px tingginya agar mudah ditekan. Tombol aksi utama (misalnya Lanjut ke Checkout atau Kirim Pesanan) menempel di bawah layar pada halaman keranjang dan checkout. Total harga ditampilkan tetap terlihat di keranjang.

## Elevation & Depth

Datar dan ringan. Kartu memakai batas tipis warna outline dengan bayangan sangat halus, tanpa bayangan tebal atau efek kaca. Bilah aksi bawah memakai garis batas atas, bukan bayangan besar.

## Shapes

Sudut membulat ramah: kartu 20px, tombol dan input 12px, chip dan badge status berbentuk pil penuh. Hindari sudut tajam.

## Components

- **Kartu menu:** nama, keterangan singkat satu baris, harga tebal, foto opsional (jika tidak ada foto, tampilkan blok warna krem dengan ikon piring, jangan gambar makanan palsu), dan tombol Tambah. Menu habis tetap tampil dengan label "Habis", tampilan lebih pudar, dan tombol Tambah dinonaktifkan.
- **Chip:** untuk kategori dan label seperti Pedas, Tidak pedas, Lauk saja. Chip aktif memakai warna primary dengan teks putih.
- **Kartu hasil budget:** menampilkan rincian hitungan satu baris per item beserta harga, lalu garis pemisah dan total tebal. Contoh format (data contoh, bukan harga resmi): "Nasi Rp5.000 + Telur Rp3.000 + Es teh Rp3.000 = **Rp11.000**". Ada tombol "Masukkan ke Keranjang".
- **Badge status pesanan:** pil dengan ikon, tulisan, dan warna status sesuai palet di atas.
- **Input:** selalu punya label di atas kolom, bukan hanya placeholder. Pesan kesalahan muncul di bawah kolom dengan ikon.
- **Pemilih jumlah:** tombol minus dan plus besar dengan angka di tengah.
- **Saklar Tersedia/Habis (pengelola):** satu ketukan, warna hijau untuk tersedia dan abu untuk habis, disertai tulisan.

## Screens

Pelanggan (prioritas tinggi, buat dulu):
1. **Beranda:** nama warung, jam buka, alamat, kontak, banner pemesanan dibuka atau ditutup, tombol "Lihat Menu", dan kartu besar "Cari Makan Sesuai Budget".
2. **Menu:** daftar per kategori, chip penyaring, tombol tambah, dan ikon keranjang dengan jumlah item.
3. **Cari Makan Sesuai Budget:** kolom nominal rupiah, pilihan jenis hasil (Makanan lengkap, Lauk saja, Termasuk minuman), preferensi opsional, lalu daftar kombinasi. Sertakan keadaan kosong: "Budget belum cukup. Pilihan termurah: ...".
4. **Keranjang:** daftar item, jumlah, catatan, total, tombol Lanjut.
5. **Checkout:** nama, kontak, waktu ambil yang diminta, ringkasan, tombol Kirim Pesanan. Tambahkan keterangan bahwa pesanan belum pasti sampai dikonfirmasi warung.

Pelanggan (berikutnya): **Status Pesanan** (kode pesanan, tahap bertingkat, alasan penolakan jika ada) dan **Riwayat** (opsional, tombol Pesan Lagi).

Pengelola (satu peran, dipakai dari ponsel): **Masuk**, **Kelola Pesanan** (daftar per status, tombol Terima, Tolak dengan alasan wajib, dan ubah status), **Kelola Menu** (daftar item, formulir, saklar Tersedia/Habis), **Pengaturan Warung** (info warung dan saklar buka/tutup pemesanan), dan **Ringkasan** (rentang tanggal, jumlah pesanan selesai, item terlaris, dengan catatan bahwa data hanya pesanan website).

## Bahasa dan Nada Teks

Semua teks antarmuka dalam bahasa Indonesia, singkat, ramah, dan menyebut langkah berikutnya. Contoh: "Pesanan terkirim. Menunggu konfirmasi warung." Jangan menulis kesan pesanan sudah pasti sebelum diterima pengelola. Pesan kesalahan jelas, misalnya "Masukkan budget dalam angka rupiah."

## Do's and Don'ts

- Lakukan: tampilkan harga dan total di setiap tahap, pakai ikon dan teks untuk status, pertahankan tombol besar dan jarak lega.
- Lakukan: gunakan warna primary hanya untuk aksi utama agar tidak ada dua tombol merah yang bersaing dalam satu layar.
- Jangan: mengarang menu, harga, nomor telepon, alamat, atau foto. Pakai data contoh yang jelas bertanda contoh.
- Jangan: menampilkan nomor kontak pelanggan di layar publik.
- Jangan: memakai gradien mencolok, animasi berlebihan, atau teks di bawah 16px untuk isi.
- Jangan: membedakan status hanya dengan warna.
