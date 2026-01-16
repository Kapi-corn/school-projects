# CRUD App

Aplikasi CRUD sederhana pengelola data peserta dengan menggunakan Native PHP + MySQL + Bootstrap.

## Fitur 📝
- Create, Read, Update dan Delete data
- Sanitasi input sederhana
- Sedikit styling dengan Bootstrap

## Prasyarat 🔗
- XAMPP dengan PHP (>= 8) dan MySQL

## Struktur ⚙️
- `config/` — berisi file koneksi database
- `database/` — berisi file untuk setup database
- `index.php` — halaman utama untuk menampilkan data
- `create.php` — menambah data
- `update.php` — memperbarui data

## Setup 🛠
1. Copy folder ke path `xampp/htdocs`.
2. Hidupkan server PHP dan MySQL di XAMPP.
3. Setup database. Masuk ke url `localhost/phpmyadmin`.
4. Import file `setup.sql` yang ada di folder `database/` untuk membuat database dan struktur tabelnya.
5. Jalankan di `localhost/{nama_folder}`.

## Troubleshooting ⚓
- Error server PHP & MySQL: periksa XAMPP dan pastikan server PHP dan MySQL menyala.
- Link Bootstrap mati: instalasi Bootstrap ulang atau perbarui link sesuai versi (>= 5.3.8).
- Query `setup.sql` gagal dijalankan: buat database secara manual mengikuti panduan pada file `setup.sql`.

## Lisensi ⚖️
Project ini berlisensi di bawah MIT License.