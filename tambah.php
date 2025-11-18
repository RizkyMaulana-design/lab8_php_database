<?php
include "koneksi.php";

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $gambar = "";
    if ($_FILES['file_gambar']['error'] == 0) {
        $filename = str_replace(" ", "_", $_FILES['file_gambar']['name']);
        $path = "gambar/" . $filename;
        move_uploaded_file($_FILES['file_gambar']['tmp_name'], $path);
        $gambar = $path;
    }

    $sql = "INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar)
            VALUES ('$nama', '$kategori', '$harga_jual', '$harga_beli', '$stok', '$gambar')";

    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Tambah Barang</title>
</head>

<body>
    <div class="container">
        <h1>Tambah Barang</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="input">
                <label>Nama Barang</label>
                <input type="text" name="nama" required>
            </div>

            <div class="input">
                <label>Kategori</label>
                <select name="kategori">
                    <option value="Komputer">Komputer</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Hand Phone">Hand Phone</option>
                </select>
            </div>

            <div class="input">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" required>
            </div>

            <div class="input">
                <label>Harga Beli</label>
                <input type="number" name="harga_beli" required>
            </div>

            <div class="input">
                <label>Stok</label>
                <input type="number" name="stok" required>
            </div>

            <div class="input">
                <label>Gambar</label>
                <input type="file" name="file_gambar">
            </div>

            <input type="submit" name="submit" value="Simpan" class="btn">
        </form>

    </div>
</body>

</html>