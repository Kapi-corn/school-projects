-- BUAT DATABASE DENGAN NAMA peserta_db
CREATE DATABASE peserta_db;
USE peserta_db;

CREATE TABLE peserta (
  -- STRUKTUR TABEL
    id INT PRIMARY KEY AUTO_INCREMENT,
    -- id: tipe INT, ubah ke PRIMARY dengan AI (Auto Increment)
    nama VARCHAR(64),
    -- nama: tipe VARCHAR, dengan panjang 64 karakter
    sekolah VARCHAR(64),
    -- sekolah: tipe VARCHAR, dengan panjang 64 karakter
    jurusan VARCHAR(64),
    -- jurusan: tipe VARCHAR, dengan panjang 64 karakter
    no_hp VARCHAR(13),
    -- no_hp: tipe VARCHAR, dengan panjang 13 karakter
    alamat VARCHAR(64)
    -- alamat: tipe VARCHAR, dengan panjang 64 karakter
);