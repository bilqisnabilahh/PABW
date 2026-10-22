# Praktikum Authentication Laravel

Aplikasi laporan banjir ini menyediakan authentication **manual tanpa Laravel Breeze**. Register, login, logout, session, hashing password, dan perlindungan halaman bisa dipelajari dari implementasi di controller dan route.

## Menjalankan aplikasi

1. Salin `.env.example` menjadi `.env`, lalu atur koneksi database.
2. Jalankan `composer install` dan `php artisan key:generate`.
3. Jalankan `php artisan migrate --seed`.
4. Jalankan aplikasi dengan `php artisan serve`.

## Akun demo

- Admin: `admin@bpbd.go.id` / `Admin12345`
- Petugas: `petugas1@bpbd.test` sampai `petugas5@bpbd.test` / `Petugas123`

Seeder dapat dijalankan ulang tanpa menambah akun petugas duplikat. Semua password disimpan dalam bentuk hash.

## Alur authentication manual

- `RegisterController` memvalidasi data, membuat user dengan password ter-hash, lalu login-kan user.
- `LoginController` memeriksa kredensial dengan `Auth::attempt()` dan meregenerasi session ID setelah berhasil.
- Logout memanggil `Auth::logout()`, menghapus session, dan meregenerasi token CSRF.
- Route `/laporan` dan `/profil` dilindungi middleware `auth`; route `/lapor` tetap publik agar masyarakat dapat mengirim laporan.
- Route register dan login memakai middleware `guest`.

## Catatan cakupan praktikum

Implementasi di repository ini adalah versi manual. Laravel Breeze belum dipasang; jika penilaian mewajibkan Breeze sekaligus versi manual, scaffold Breeze perlu ditambahkan terpisah agar kedua implementasi dapat dibandingkan.
