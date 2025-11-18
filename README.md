# Praktikum 8 – PHP dan Database MySQL  
Nama    : Rizky Maulana

Nim     : 312410430

Kelas   : TI.24.A.3

Matkul  : Pemrograman Web


# Tujuan Praktikum
1. Mahasiswa memahami konsep dasar database MySQL. 

2. Mahasiswa mampu memahami proses CRUD (Create, Read, Update, Delete).  

3. Mahasiswa mampu membuat aplikasi CRUD sederhana menggunakan PHP dan MySQL.  

# Langkah Kerja Praktikum

# 1. Menjalankan XAMPP
- Jalankan *Apache* dan *MySQL* pada XAMPP Control Panel.  

- Pastikan status berubah menjadi warna hijau (Running).


# 2. Membuat Database
Masuk ke phpMyAdmin melalui: 
http://localhost/phpmyadmin/


# 3. Membuat Tabel `data_barang`
Pada tab SQL, masukkan query:

# 4. Menambahkan Data Awal
INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok)
VALUES 
('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);

# 5. Membuat File koneksi.php

[code.koneksi.php](https://github.com/user-attachments/files/23608518/code.koneksi.php)

# 6. Membuat File index.php 
Menampilkan seluruh data dari tabel data_barang.

[code.index.php](https://github.com/user-attachments/files/23608523/code.index.php)


# 7. Membuat File tambah.php 
Menambahkan data baru ke database melalui form input.

[code.tambah.php](https://github.com/user-attachments/files/23608532/code.tambah.php)

# 8. Membuat File ubah.php
Mengubah data barang berdasarkan ID.

[code.ubah.php](https://github.com/user-attachments/files/23608535/code.ubah.php)

# 9. Membuat File hapus.php

[code.hapus.php](https://github.com/user-attachments/files/23608540/code.hapus.php)

# 10. Menambahkan File style.css

[code.css](https://github.com/user-attachments/files/23608562/code.css)


# Kesimpulan
Pada praktikum ini telah dibuat aplikasi CRUD sederhana menggunakan PHP dan MySQL.
Melalui praktikum ini, mahasiswa dapat memahami:

1. Cara membuat database dan tabel

2. Cara menampilkan data (READ)

3. Cara menambah data (CREATE)

4. Cara mengubah data (UPDATE)

5. Cara menghapus data (DELETE)

6. Cara menerapkan CSS untuk mempercantik tampilan

Aplikasi ini dapat menjadi dasar untuk membangun sistem manajemen data yang lebih kompleks.
