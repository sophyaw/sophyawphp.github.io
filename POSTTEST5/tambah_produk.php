<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Produk</title>
  <link rel="stylesheet" href="product-list.css">
</head>

<body>
  <main class="tambah-produk-page">
    <div class="container">
      <h1>Tambah Produk</h1>
      <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama_produk">Nama Produk</label>
          <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk">
        </div>
        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga produk">
        </div>
        <div class="form-group">
          <label for="tipe_produk">Tipe Produk</label>
          <select class="form-control" id="tipe_produk" name="tipe_produk">
            <option value="album">Album</option>
            <option value="merch">Merchandise</option>
          </select>
        </div>
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div>

        <button class="btn delete">
          <a href="list_produk.php">Kembali</a>
        </button>
        <button type="submit" class="btn">Tambah Produk</button>
      </form>
    </div>
  </main>
</body>

</html>