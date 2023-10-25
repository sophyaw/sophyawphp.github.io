<?php
include_once "./db_conn.php";

if (!isset($_GET["id"])) {
  header("Location: list_produk.php");
  exit;
}

$id_produk = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM produk WHERE id = '$id_produk'");

while ($row = mysqli_fetch_assoc($query)) {
  $nama_produk = $row["nama_produk"];
  $harga = $row["harga"];
  $tipe_produk = $row["tipe_produk"];
  $gambar = $row["gambar"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Produk</title>
  <link rel="stylesheet" href="product-list.css">
</head>

<body>
  <main class="tambah-produk-page">
    <div class="container">
      <h1>Edit Produk</h1>
      <form action="proses_edit_produk.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
        <input type="hidden" name="old_image" value="<?= $gambar ?>">
        <div class="form-group">
          <label for="nama_produk">Nama Produk</label>
          <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk" value="<?= $nama_produk ?>">
        </div>
        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga produk" value="<?= $harga ?>">
        </div>
        <div class="form-group">
          <label for="tipe_produk">Tipe Produk</label>
          <select class="form-control" id="tipe_produk" name="tipe_produk">
            <option value="album" <?= $tipe_produk == "album" ? "selected" : "" ?>>Album</option>
            <option value="merch" <?= $tipe_produk == "merch" ? "selected" : "" ?>>Merchandise</option>
          </select>
        </div>
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div>

        <button class="btn delete">
          <a href="list_produk.php">Kembali</a>
        </button>
        <button type="submit" class="btn edit">Edit Produk</button>
      </form>
    </div>
  </main>
</body>

</html>