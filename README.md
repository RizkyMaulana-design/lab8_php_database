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

<img width="1064" height="710" alt="koneksi php" src="https://github.com/user-attachments/assets/f4a6dd0e-809e-4a74-b500-5c6b03e1aebd" />


# 6. Membuat File index.php 
Menampilkan seluruh data dari tabel data_barang.

<img width="1818" height="2534" alt="index php" src="https://github.com/user-attachments/assets/53ffd91a-c7fb-4c61-8fd5-149d79eea7de" />


# 7. Membuat File tambah.php 
Menambahkan data baru ke database melalui form input.

<img width="1742" height="3408" alt="tambah php" src="https://github.com/user-attachments/assets/b1f32f48-35ac-40ac-b2be-88f096ee9266" />


# 8. Membuat File ubah.php
Mengubah data barang berdasarkan ID.

<img width="2094" height="4662" alt="ubah php" src="https://github.com/user-attachments/assets/87d4001d-04e6-4750-a455-ba03eb8e6279" />


# 9. Membuat File hapus.php

<img width="1156" height="710" alt="hapus php" src="https://github.com/user-attachments/assets/5f07722a-edd6-408c-8c32-f95bfc396fb6" />


# 10. Menambahkan File style.css

<img width="1912" height="596" alt="style css" src="https://github.com/user-attachments/assets/5c60e8e5-fb92-4c65-9df8-3db938285ca0" />


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
