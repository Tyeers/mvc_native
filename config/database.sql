CREATE DATABASE IF NOT EXISTS toko
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE toko;

CREATE TABLE IF NOT EXISTS produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_produk VARCHAR(20) NOT NULL UNIQUE,
    nama_produk VARCHAR(100) NOT NULL,
    kategori VARCHAR(100) NOT NULL,
    harga INT(32) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO produk (kode_produk, nama_produk, kategori, harga) VALUES
('PRD001', 'Laptop', 'Elektronik', 7500000),
('PRD002', 'Mouse Wireless', 'Aksesori Komputer', 150000),
('PRD003', 'Keyboard Mekanik', 'Aksesori Komputer', 450000);