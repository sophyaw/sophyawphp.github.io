<?php
session_start();
include_once "./db_conn.php";

$message = $_SESSION['message'] ?? null;
unset($_SESSION['message']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Produk</title>
  <link rel="stylesheet" href="product-list.css">
</head>

<body>

  <main class="list-product-page">
    <div class="container">
      <div class="list-product-header">
        <div>
          <h1>List Produk</h1>
          <button class="btn delete">
            <a href="index.php">
              Kembali
            </a>
          </button>
          <button class="btn add">
            <a href="tambah_produk.php">
              Tambah Produk
            </a>
          </button>
        </div>

        <p id="current-date"></p>
      </div>


      <?php if (isset($message)) : ?>
        <p class="message"><?= $message ?></p>
      <?php endif; ?>
      <div class="responsive-table">
        <table class="product-list">
          <thead>
            <tr>
              <th>No.</th>
              <th>Gambar</th>
              <th>Nama Produk</th>
              <th>Harga</th>
              <th>Tipe Produk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM produk";
            $result = mysqli_query($conn, $query);
            $no = 1;
            ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
              <tr>
                <td><?= $no ?></td>
                <td><img src="./uploads/<?= $row["gambar"] ?>" alt="" style="width: 100px;"></td>
                <td><?= $row["nama_produk"] ?></td>
                <td>Rp. <?= number_format($row["harga"]) ?></td>
                <td><?= $row["tipe_produk"] ?></td>
                <td>
                  <button class="btn edit">
                    <a href="edit_produk.php?id=<?= $row["id"] ?>">Edit</a>
                  </button>
                  <button class="btn delete">
                    <a href="javascript:void(0);" onclick="confirmDelete(<?= $row["id"] ?>)">Delete</a>
                  </button>
                </td>
              </tr>
              <?php $no++ ?>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>

<script>
  function confirmDelete(productId) {
    if (confirm("Yakin akan menghapus produk?")) {
      var deleteUrl = "proses_delete_produk.php?id=" + productId;
      window.location.href = deleteUrl;
    }
  }

  function updateDate() {
    const currentDate = new Date();

    const formattedDate = currentDate.toLocaleString('id-ID', {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric',
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit',
    });

    document.getElementById('current-date').textContent = formattedDate;
  }

  updateDate();
  setInterval(updateDate, 1000);
</script>

</html>