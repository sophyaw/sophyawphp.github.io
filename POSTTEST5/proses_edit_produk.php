<?php
session_start();
include_once "./db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product_id = $_POST['id_produk'];
  $nama_produk = $_POST['nama_produk'];
  $harga = $_POST['harga'];
  $tipe_produk = $_POST['tipe_produk'];
  $old_image = $_POST['old_image'];

  if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['gambar'];
    $file_name = basename($file['name']);
    $file_tmp = $file['tmp_name'];

    $upload_destination = 'uploads/' . $file_name;
    move_uploaded_file($file_tmp, $upload_destination);
  } else {
    $file_name = $old_image;
  }

  $query = "UPDATE produk SET nama_produk = '$nama_produk', harga = $harga, tipe_produk = '$tipe_produk', gambar = '$file_name' WHERE id = $product_id";

  if (mysqli_query($conn, $query)) {
    $_SESSION['message'] = "Produk berhasil diedit";
    header("Location: list_produk.php");
    exit;
  } else {
    echo 'Error: ' . mysqli_error($conn);
  }
} else {
  echo 'Invalid request';
}
