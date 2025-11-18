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
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan1";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal.");
}
?>

# 6. Membuat File index.php 
Menampilkan seluruh data dari tabel data_barang.

# 7. Membuat File tambah.php 
Menambahkan data baru ke database melalui form input.

# 8. Membuat File ubah.php
Mengubah data barang berdasarkan ID.

# 9. Membuat File hapus.php
<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
mysqli_query($conn, $sql);
header('location: index.php');
?>

# 10. Menambahkan File style.css
body {
    background-color: #f8f8f8;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
}

.container {
    width: 900px;
    margin: 20px auto;
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 0 0 5px #ccc;
}

h1 {
    margin-bottom: 20px;
    font-size: 24px;
    text-align: center;
}

.main {
    padding: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th {
    background-color: #333;
    color: white;
    padding: 10px;
    text-align: left;
}

table td {
    border: 1px solid #ccc;
    padding: 8px;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table img {
    width: 100px;
}

.input {
    margin-bottom: 15px;
}

.input label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.input input[type="text"],
.input select,
.input input[type="file"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #aaa;
    border-radius: 5px;
    box-sizing: border-box;
}

.submit input[type="submit"] {
    background-color: #0b72b9;
    color: white;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.submit input[type="submit"]:hover {
    background-color: #095a92;
}


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
