# LaporBanjir — BPBD Kabupaten Bandung

Aplikasi sederhana untuk menerima laporan banjir warga dan mengelola tindak lanjut oleh petugas. Aplikasi ini dibangun pada project Laravel 12 yang sudah tersedia di folder kerja.

## Teknologi dan pilihan autentikasi

Project menggunakan **Laravel Breeze** untuk autentikasi petugas. Breeze dipilih karena menyediakan halaman login, pengelolaan sesi, dan middleware `auth` yang siap digunakan, sehingga halaman pengelolaan laporan dapat dibatasi untuk pengguna yang masuk. Form laporan warga tetap terbuka tanpa akun agar pelaporan mudah dilakukan.

## Menyiapkan aplikasi

1. Jalankan XAMPP dan pastikan MySQL aktif.
2. Buka phpMyAdmin (`http://localhost/phpmyadmin`), pilih **New**, buat database bernama `db_laporbanjir` dengan collation `utf8mb4_unicode_ci`.
3. Atur `DB_CONNECTION=mysql` dan `DB_DATABASE=db_laporbanjir` pada `.env`. Sesuaikan `DB_HOST`, `DB_PORT`, `DB_USERNAME`, dan `DB_PASSWORD` jika konfigurasi MySQL lokal Anda berbeda.
4. Jalankan perintah berikut dari folder project:

   ```sh
   php artisan migrate
   php artisan storage:link
   npm run build
   php artisan serve
   ```

5. Buka alamat yang ditampilkan `php artisan serve`. Warga dapat mengirim laporan lewat **Buat Laporan**. Petugas masuk melalui **Masuk Petugas** lalu membuka **Panel Petugas**.

Breeze menyediakan halaman pendaftaran pada `/register` untuk membuat akun petugas awal. Setelah akun dibuat, petugas dapat masuk melalui `/login`.

## Fitur

- Form laporan warga dengan nama, nomor HP, kecamatan, lokasi, perkiraan tinggi air, keterangan, dan foto bukti.
- Foto wajib JPG/JPEG/PNG dan maksimal 2 MB; foto disimpan pada disk `public`.
- Daftar laporan ber-thumbnail, paginasi, halaman detail, pengubahan data dan status, serta penghapusan laporan.
- Status penanganan: Menunggu, Diproses, dan Selesai.
- Foto sebelumnya dihapus saat diganti; foto laporan ikut dihapus saat laporan dihapus.
- Pesan berhasil dan pesan validasi pada setiap input.

## Database

Migration `create_laporans_table` membuat tabel `laporans`. Tabel mencatat identitas pelapor, informasi kejadian, path foto, status (default **Menunggu**), dan waktu pencatatan. Akun petugas menggunakan tabel `users` bawaan Laravel.
