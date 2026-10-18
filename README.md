# MVC PHP Native - Manajemen Produk
Aplikasi CRUD sederhana untuk mengelola data produk dan stok menggunakan pola Model-View-Controller pada PHP Native.

## Kebutuhan
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti XAMPP atau Laragon
- Git

## Instalasi
1. Clone atau salin project ke folder web server.
2. Import `database/kampus.sql`.
3. Sesuaikan koneksi pada `config/database.php`.
4. Buka `http://localhost/mvc_native/public/index.php`.

## Struktur MVC
- `app/models/` : akses dan operasi data.
- `app/controllers/` : alur request dan pemanggilan Model/View.
- `app/views/` : tampilan HTML.
- `config/` : konfigurasi koneksi database.
- `database/` : skema dan data awal SQL.
- `public/` : entry point aplikasi.

## Fitur
- Menampilkan daftar produk dan stok
- Menambah produk beserta jumlah stok
- Mengubah data produk dan stok
- Menghapus produk

## Histori Git
git log --oneline --graph --decorate
* 26be8f4 (HEAD -> master) feat: add stok for CRUD
* 1c7c874 feat: add stok column in produk
* 95bcc02 fix: fix product CRUD columns to match database schema
* cdea12a feat: add complete CRUD routing
* 03566a8 feat: add complete product CRUD views
* a27bae1 feat: add complete product CRUD controller
* ae6e38a feat: add complete product CRUD model
* 66a17c1 feat: add PDO database connection
* 3ad0d20 feat: add product database schema and seed data
* a311c9b chore: initialize mvc php native project