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
    $old_image_path = 'uploads/' . $old_image;

    if (file_exists($old_image_path)) {
      unlink($old_image_path);
    }

    $file = $_FILES['gambar'];
    $file_name = basename($file['name']);
    $file_tmp = $file['tmp_name'];

    $current_date = date("Y-m-d");
    $new_file_name = $current_date . '-' . $file_name;
    $upload_destination = 'uploads/' . $new_file_name;
    move_uploaded_file($file_tmp, $upload_destination);
  } else {
    $file_name = $old_image;
  }

  $query = "UPDATE produk SET nama_produk = '$nama_produk', harga = $harga, tipe_produk = '$tipe_produk', gambar = '$new_file_name' WHERE id = $product_id";

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
