<?php
include "koneksi.php";

// -------------------- AMBIL DATA --------------------
if (!isset($_GET['id'])) {
    die("Error: ID tidak ditemukan.");
}

$id = $_GET['id'];

$sql = "SELECT * FROM data_barang WHERE id_barang = '$id'";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Error: Data tidak tersedia.");
}

$data = mysqli_fetch_assoc($result);

// -------------------- UPDATE DATA --------------------
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    // upload gambar
    $gambar = $data['gambar']; // default gambar lama

    if ($_FILES['file_gambar']['error'] == 0) {
        $filename = str_replace(" ", "_", $_FILES['file_gambar']['name']);
        $path = "gambar/" . $filename;
        move_uploaded_file($_FILES['file_gambar']['tmp_name'], $path);
        $gambar = $path;
    }

    $sql = "UPDATE data_barang SET 
            nama='$nama',
            kategori='$kategori',
            harga_jual='$harga_jual',
            harga_beli='$harga_beli',
            stok='$stok',
            gambar='$gambar'
            WHERE id_barang='$id'";

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}

function selected($a, $b)
{
    return ($a == $b) ? "selected" : "";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Ubah Barang</title>
</head>

<body>
    <div class="container">
        <h1>Ubah Barang</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="input">
                <label>Nama</label>
                <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
            </div>

            <div class="input">
                <label>Kategori</label>
                <select name="kategori">
                    <option value="Komputer" <?= selected("Komputer", $data['kategori']) ?>>Komputer</option>
                    <option value="Elektronik" <?= selected("Elektronik", $data['kategori']) ?>>Elektronik</option>
                    <option value="Hand Phone" <?= selected("Hand Phone", $data['kategori']) ?>>Hand Phone</option>
                </select>
            </div>

            <div class="input">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" value="<?= $data['harga_jual'] ?>" required>
            </div>

            <div class="input">
                <label>Harga Beli</label>
                <input type="number" name="harga_beli" value="<?= $data['harga_beli'] ?>" required>
            </div>

            <div class="input">
                <label>Stok</label>
                <input type="number" name="stok" value="<?= $data['stok'] ?>" required>
            </div>

            <div class="input">
                <label>Gambar</label>
                <input type="file" name="file_gambar">
            </div>

            <img src="<?= $data['gambar'] ?>" width="120">

            <input type="submit" name="submit" value="Simpan" class="btn">
        </form>

    </div>
</body>

</html>