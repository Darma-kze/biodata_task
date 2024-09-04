# Formulir Pendaftaran dengan PHP dan MySQL

Proyek ini adalah aplikasi sederhana yang menggunakan HTML, CSS, PHP, dan MySQL untuk membuat formulir pendaftaran. Data dari formulir disimpan di dalam database MySQL.

## Fitur
- Formulir pendaftaran dengan input: nama, NIM, kelas, gender, email, dan pesan.
- Validasi dan sanitasi input pengguna.
- Penyimpanan data ke dalam database MySQL.
- Pesan konfirmasi ketika data berhasil disimpan.

## Persyaratan yang di butuhkan
- Web server seperti Apache.
- PHP 
- MySQL Server untuk menyimpan data.
- Browser web modern untuk mengakses formulir.

## Buat Database
   - Buka [phpMyAdmin](http://localhost/phpmyadmin/) dan buat database baru dengan nama `biodata`.
   - Jalankan perintah SQL berikut untuk membuat tabel `contacts`:
   ```sql
   CREATE TABLE contacts (
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       nama VARCHAR(50) NOT NULL,
       nim VARCHAR(10) NOT NULL,
       kelas VARCHAR(10) NOT NULL,
       gender ENUM('Laki-laki', 'Perempuan') NOT NULL,
       email VARCHAR(50) NOT NULL,
       pesan TEXT
   );

## Menjalankan 
- Aktifkan XAMPP, MYSQL.
- Buka [localhost/biodata/].
- Aplikasi siap di gunakan.