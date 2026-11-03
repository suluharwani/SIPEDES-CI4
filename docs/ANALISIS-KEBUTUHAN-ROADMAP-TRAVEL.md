# Analisis kebutuhan dan rencana pengembangan travel

## Ringkasan kondisi project

`SIPEDES-CI4` adalah portal informasi Desa Penganten dengan CodeIgniter 4.7.6. Sebelumnya, halaman utama menampilkan informasi desa; project juga memiliki halaman Pertanian, Kegiatan, Layanan, Mitra, UMKM, dan Lainnya, beberapa model/migration konten, serta login dan dashboard admin dasar. Template travel kini menjadi halaman utama (`/`) sesuai arahan. Halaman SIPEDES lain tetap tersedia melalui URL masing-masing.

## Kebutuhan produk

1. Identitas usaha yang dapat diganti: nama, slogan, logo/monogram, warna, nomor WhatsApp, alamat, media sosial, dan informasi layanan.
2. Katalog layanan: travel reguler door-to-door, bus pariwisata/rombongan, dan sewa mobil dengan sopir.
3. Data rute: kota asal/tujuan, arah layanan, jadwal, tarif, estimasi, status aktif, dan catatan cakupan jemput/antar.
4. Form reservasi: nama, kontak, asal-tujuan, tanggal, jam, layanan, dan jumlah penumpang; validasi di server dan perlindungan CSRF.
5. Pencatatan permintaan ke database dan penerusan ringkasan booking ke WhatsApp.
6. Area pengelola untuk mengatur konten, rute, jadwal, tarif, kapasitas kendaraan, dan status permintaan.
7. Informasi kebijakan pembatalan, privasi data pelanggan, cara pembayaran, serta status konfirmasi yang jelas.

## Kekurangan yang ditemukan sebelum perubahan

- Belum ada katalog atau proses booking travel; model dan tabel yang ada ditujukan untuk konten desa.
- Route admin hanya menyediakan login, logout, dan dashboard. Tautan CRUD Berita/Kegiatan/UMKM/Layanan di dashboard belum memiliki route terdaftar.
- Akses admin hanya diperiksa dengan keberadaan session `user`; belum ada pemeriksaan role pada tiap route, pembatasan percobaan login, atau alur reset password.
- Filter CSRF belum aktif secara global. Booking baru menggunakan filter CSRF pada route POST tersendiri; route login lama masih perlu hardening.
- `UserSeeder` berisi kredensial awal `admin/admin123`, sehingga harus diganti dan tidak boleh dipakai sebagai akun produksi.
- Database default project telah memiliki konfigurasi lokal tersendiri. Database `ellsa_holiday_travel_sipedesc` dipisahkan untuk booking agar tabel reservasi tidak bercampur dengan data SIPEDES.
- Harga dan waktu tempuh rute belum dikonfirmasi. Tampilan saat ini memakai “Tanya kami” dan “Konfirmasi operator”; jangan menerbitkan angka operasional sebelum diverifikasi.
- Foto rute, peta jalur, kapasitas armada/kursi, pembayaran, pembatalan, dan notifikasi otomatis belum tersedia.
- Belum ada dashboard operasional untuk melihat dan mengubah status booking.

## Pekerjaan yang sudah masuk ke MVP

- Landing page biru responsif menggantikan beranda, dengan layanan, rute, jadwal, dan formulir booking.
- CSS dan JavaScript diisolasi di `public/assets/travel/` agar tidak bertabrakan dengan aset SIPEDES. View memakai URL `assets/travel/style.css` dan `assets/travel/app.js`.
- Brand, nomor kontak, alamat, area asal/tujuan, dan daftar rute berada di `app/Config/Travel.php` untuk memudahkan reseller mengganti data.
- POST booking memiliki validasi input dan CSRF, menyimpan permintaan berstatus `pending`, lalu membuka WhatsApp dengan ringkasan dan kode booking.
- Tabel booking ada di database khusus `ellsa_holiday_travel_sipedesc`; migrasi terpisah dapat dijalankan dengan `php spark travel:migrate`.

## Rencana pengembangan fitur

### Tahap 1 — Siap dipakai operasional

- Lengkapi dashboard admin travel: daftar/cari/filter booking, detail pelanggan, ubah status (baru, dikonfirmasi, dibayar, selesai, batal), dan ekspor CSV.
- Buat CRUD layanan, rute, harga, jadwal, titik jemput/antar, serta kontak/identitas brand.
- Tampilkan pesan sukses/gagal dan halaman konfirmasi booking setelah form dikirim.
- Tambahkan kebijakan privasi, syarat pemesanan, pembatalan, dan persetujuan penggunaan nomor kontak.
- Verifikasi tarif, durasi, jadwal aktual, dan layanan khusus bersama operator ELLSA.

### Tahap 2 — Kapasitas dan jadwal

- Kelola armada dan kapasitas per perjalanan, bukan hanya total penumpang.
- Buat trip konkret berisi rute, tanggal, jam, kendaraan, sopir, kapasitas, dan kursi tersedia.
- Cegah overselling dengan transaksi database dan penguncian saat konfirmasi kursi.
- Tambahkan pencarian ketersediaan, batas pemesanan, penutupan keberangkatan, dan kalender operasional.

### Tahap 3 — Pembayaran dan komunikasi

- Tambahkan status pembayaran dan bukti bayar untuk tahap awal; payment gateway setelah proses refund dan rekonsiliasi disepakati.
- Kirim notifikasi booking/status melalui WhatsApp Business API atau email dengan template resmi dan persetujuan pelanggan.
- Sediakan voucher, diskon, invoice, dan riwayat transaksi jika kebijakan bisnis sudah ditentukan.

### Tahap 4 — Paket reseller dan produksi

- Pindahkan konfigurasi brand/rute dari file ke panel pengaturan agar reseller tidak mengedit kode.
- Tentukan model lisensi dan pemisahan tenant/data bila satu instalasi melayani banyak travel.
- Siapkan deployment, HTTPS, backup/restore, log, pemantauan, kebijakan retensi data, dan prosedur migrasi.
- Tambahkan automated tests untuk validasi booking, proteksi CSRF, status pembayaran, kapasitas, hak akses admin, dan migrasi database.

## Prioritas sebelum menerima pemesanan publik

1. Pastikan jadwal, tarif, rute, dan kapasitas benar-benar disetujui operator.
2. Aktifkan login admin dengan password unik; hapus kredensial contoh dari seeder produksi.
3. Selesaikan dashboard pengelolaan booking agar permintaan tidak bergantung pada riwayat chat saja.
4. Tetapkan syarat, pembatalan, privasi, dan cara penyimpanan data pelanggan.
5. Konfirmasi database/backup, HTTPS, serta alamat WhatsApp resmi pada server deployment.
